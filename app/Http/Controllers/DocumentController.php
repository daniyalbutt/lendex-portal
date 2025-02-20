<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use App\Models\UserDocs;
use App\Models\TimeLine;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Mail\DocumentStatus;
use App\Mail\DocumentAdded;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Hash;
use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{

    function __construct(){
        $this->middleware('permission:application-list|application-create|application-edit|application-delete', ['only' => ['index','show']]);
        $this->middleware('permission:application-create', ['only' => ['create','store']]);
        $this->middleware('permission:application-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:application-delete', ['only' => ['destroy']]);
        $this->middleware('permission:track-your-application', ['only' => ['trackYourApplication']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Document::orderBy('id','DESC')->where('status', '!=', 0);
        if($request->status != null){
            $data = $data->where('status', $request->status);
        }
        $data = $data->get();
        return view('applications.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Document::find($id);
        if(Auth::user()->hasRole('User')){
            if($data != null){
                if($data->user_id != Auth::user()->id){
                    return redirect()->back();
                }
            }else{
                return redirect()->back();
            }
        }
        return view('applications.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        $data = $document;
        return view('applications.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status' => 'required',
            'email' => 'required|email'
        ]);

        $data = Document::find($id);
        $data->status = $request->status;
        $data->comments = $request->comments;

        //sending Email
        $mailData = [
            'status' => 'Your Document Has ' . $data->find_status(),
            'reason' => $data->comments
        ];

        $user_id = $data->user_id;

        if($data->status == 4 ){
            $user = new User();
            $user->name = $data->find_name();
            $user->email = $data->find_email();
            $password = Str::random(10);
            $user->password = Hash::make($password);
            $user->save();
            $user_id = $user->id;
            $mailData['username'] = $data->find_email();
            $mailData['password'] = $password;
            $data->user_id = $user->id;
            $role = Role::where('name', 'User')->first();
            $user->assignRole([$role->id]);

            $user_doc = new UserDocs();
            $user_doc->name = 'Bank Statement';
            $user_doc->file_path = $data->find_key('bank_statement');
            $user_doc->status = 2;
            $user_doc->user_id = $user->id;
            $user_doc->save();
        }

        if($user_id == 0){
            $time_line = TimeLine::where('comments', 'documents-'.$id)->first();
            $time_line->comments = '';
        }else{
            $time_line = new TimeLine();
            $time_line->comments = $request->comments;
        }
        $time_line->title = 'Application - ' . $data->find_status();
        $time_line->user_id = $user_id;
        $time_line->save();

        $data->save();

        try {
            Mail::to($data->find_email())->send(new DocumentStatus($mailData));
        } catch (\Exception $e) {

        }

        return redirect()->back()->with('success','Application updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $document = Document::find($id);
        $document->status = 0;
        $document->save();
        return redirect()->route('applications.index')->with('success','Application deleted successfully');
    }

    function downloadAndStoreFile($fileUrl, $directory = 'downloads'){
        $response = Http::get($fileUrl);
        if ($response->successful()) {
            $fileName = basename(parse_url($fileUrl, PHP_URL_PATH));
            $filePath = $directory . '/' . $fileName;
            Storage::disk('public')->put($filePath, $response->body());
            return Storage::url($filePath);
        }
    }

    public function createDocument(Request $request){
        $data = $request->input();
        $bank_statement = $data['bank_statement'];
        $bank_statement_path = [];
        foreach($bank_statement as $key => $value){
            $directory = "upload/files/".$data['email'];
            array_push($bank_statement_path , $this->downloadAndStoreFile($value, $directory));
        }
        $document = new Document();

        // if ($request->hasFile('bank_statement')) {
        //     $file = $request->file('bank_statement');
        //     $store_path = "upload/files/".$data['email'];
        //     $name = md5(uniqid(rand(), true)) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
        //     $file->move(public_path('/' . $store_path), $name);
        //     $file_path = $store_path . '/' . $name;
        //     $data['bank_statement'] = $file_path;
        // }
        $data['bank_statement_path'] = json_encode($bank_statement_path);
        $document->document = json_encode($data);
        $document->status = 1;
        $document->save();

        $mailData = [
            'status' => $document->find_name() . ' submitted an Application',
            'reason' => 'Please Login to your account to view the uploaded Application',
            'subject' => 'New Application Submitted'
        ];
        Mail::to(env('APP_ADMIN_EMAIL'))->send(new DocumentAdded($mailData));

        $data = new TimeLine();
        $data->user_id = $document->id;
        $data->title = $document->find_name() . ' submitted an Application';
        $data->comments = 'documents-'.$document->id;
        $data->save();

        return json_encode(['status' => true]);
    }

    public function trackYourApplication(){
        $data = Document::orderBy('id','DESC')->where('status', '!=', 0)->where('user_id', Auth::user()->id)->first();
        return view('user.track-your-app', compact('data'));
    }

    public function applicationView($id){
        $data = Document::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if($data != null){
            return view('applications.show', compact('data'));
        }else{
            return redirect()->back();
        }
    }
}
