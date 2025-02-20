<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDocs;
use App\Models\TimeLine;
use Illuminate\Http\Request;
use Mail;
use App\Mail\DocumentAdded;
use Auth;

class UserDocController extends Controller
{

    function __construct(){
        $this->middleware('permission:user-doc-list|user-doc-create|user-doc-edit|user-doc-delete', ['only' => ['index','show']]);
        $this->middleware('permission:user-doc-create', ['only' => ['create','store']]);
        $this->middleware('permission:user-doc-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user-doc-delete', ['only' => ['destroy']]);
        $this->middleware('permission:user-doc-upload', ['only' => ['uploadFile']]);
        $this->middleware('permission:document-status', ['only' => ['changeStatus']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = UserDocs::where('status', '!=', 0);
        if(Auth::user()->hasRole('User')){
            $data = $data->where('user_id', Auth::user()->id);
        }else{
            $data = $data->orderBy('updated_at', 'desc');
        }
        $data = $data->get();
        return view('docs.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->user != null){
            $user = User::find($request->user);
            if($user != null){
                return view('docs.create', compact('user'));
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $user_doc = new UserDocs();
        $user_doc->name = $request->name;
        $user_doc->comments = $request->comments;
        $user_doc->user_id = $request->user_id;
        $user_doc->status = 1;
        $user_doc->save();

        $mailData = [
            'status' => $user_doc->name . ' is required',
            'reason' => 'Please Login to your account and upload the required document',
            'username' => $user_doc->user->email,
            'subject' => 'Document Added'
        ];
        
        Mail::to($user_doc->user->email)->send(new DocumentAdded($mailData));
        
        $time_line = new TimeLine();
        $time_line->user_id = $request->user_id;
        $time_line->title = $user_doc->name . ' is required';
        $time_line->comments = $request->comments;
        $time_line->save();

        return redirect()->back()->with('success','Document Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $user_doc = UserDocs::find($id);
        $user_doc->name = $request->name;
        $user_doc->comments = $request->comments;
        $user_doc->save();
        return redirect()->back()->with('success','Document Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user_doc = UserDocs::find($id);
        $user_doc->status = 0;
        $user_doc->save();
        return redirect()->back()->with('success','Document Deleted successfully');
    }

    public function uploadFile(Request $request){
        $user_id = Auth::user()->id;
        $user_docs_id = $request->user_docs_id;
        $data = UserDocs::where('id', $user_docs_id)->where('user_id', $user_id)->first();
        if($data != null){
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $store_path = "upload/files/".Auth::user()->email;
                $name = md5(uniqid(rand(), true)) . '-' . str_replace(' ', '-', $image->getClientOriginalName());
                $image->move(public_path('/' . $store_path), $name);
                $data->file_path = $store_path . '/' . $name;
                $data->status = 4;
                $data->save();
            }
            $mailData = [
                'status' => Auth::user()->name . ' upload a document - ' . $data->name,
                'reason' => 'Please Login to your account to view the uploaded document',
                'subject' => 'Document Updated'
            ];
            try {
                Mail::to(env('APP_ADMIN_EMAIL'))->send(new DocumentAdded($mailData));
            } catch (\Exception $e) {
                
            }

            $time_line = new TimeLine();
            $time_line->user_id = $user_id;
            $time_line->title = Auth::user()->name . ' upload a document - ' . $data->name;
            $time_line->save();
            
            return response()->json(['status' => true, 'message' => 'File Updated Successfully', 'data' => $data, 'doc_status' => $data->find_status(), 'doc_status_class' => $data->find_status_class()]);
        }
    }

    public function changeStatus(Request $request){
        $id = $request->user_doc_id;
        $data = UserDocs::find($id);
        $old_status = $data->find_status_class();
        $data->status = $request->status;
        $data->comments = $request->comments;
        $data->save();
        $mailData = [
            'status' => $data->name . ' - ' . $data->find_status(),
            'reason' => 'Please Login to your account to view the uploaded document',
            'subject' => 'Document ' . $data->find_status(),
            'username' => $data->user->email
        ];
        try {
            Mail::to($data->user->email)->send(new DocumentAdded($mailData));
        } catch (\Exception $e) {

        }

        $time_line = new TimeLine();
        $time_line->user_id = $data->user->id;
        $time_line->title = $data->name . ' - ' . $data->find_status();
        $time_line->comments = $data->comments;
        $time_line->save();
        
        return response()->json(['status' => true, 'message' => 'File Updated Successfully', 'data' => $data, 'doc_status' => $data->find_status(), 'doc_status_class' => $data->find_status_class(), 'old_status' => $old_status]);
    }

}
