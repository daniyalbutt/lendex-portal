<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\DocumentAdded;
use DB;

class MessageController extends Controller
{

    function __construct(){
        $this->middleware('permission:message-list|message-create|message-edit|message-delete', ['only' => ['index','show']]);
        $this->middleware('permission:message-create', ['only' => ['create','store']]);
        $this->middleware('permission:message-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:message-delete', ['only' => ['destroy']]);
        $this->middleware('permission:message-view', ['only' => ['userMessage']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Message::select('sender_id')->where('user_id', 0)->groupBy('sender_id')->orderBy('updated_at', 'desc')->get();
        return view('message.index', compact('data'));
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
        $user_name = Auth::user()->name;
        $sender_id = Auth::user()->id;
        $user_id = 0;
        if(Auth::user()->hasRole('User')){
            $user_name = Auth::user()->name;
            $user_email = env('APP_ADMIN_EMAIL');
        }else{
            $user_email = Auth::user()->email;
            $user_id = $request->user_id;
        }
        $data = new Message();
        $data->sender_id = $sender_id;
        $data->user_id = $user_id;
        $data->messages = $request->message;
        $data->save();

        //sending Email
        $mailData = [
            'status' => 'Message Received From ' . $user_name,
            'reason' => $request->message,
            'subject' => 'Message Received',
        ];

        try {
            Mail::to($user_email)->send(new DocumentAdded($mailData));
        } catch (\Exception $e) {

        }

        if($user_id == 0){
            $html = '<div class="media my-4 mb-4 justify-content-end align-items-end">
                                    <div class="message-sent">
                                        <p class="mb-1">
                                            '.$data->messages.'
                                        </p>
                                        <span class="fs-12">'.date('h:i a - d M, Y', strtotime($data->created_at)).'</span>
                                    </div>
                                    <div class="image-box ms-sm-3 ms-2 mb-4">
                                        <img src="'.asset('images/user.jpg').'" alt="" class=" img-1">
                                        <span class="active"></span>
                                    </div>
                                </div>';
        }else{
            $html = '<div class="media my-4 justify-content-start align-items-start">
                                    <div class="image-box me-sm-3 me-2">
                                        <img src="'.asset('images/dummy-user.png').'" alt="" class="img-1">
                                        <span class="active1"></span>
                                    </div>
                                    <div class="message-received">
                                        <p class="mb-1">
                                            '.$data->messages.'
                                        </p>
                                        <span class="fs-12">'.date('h:i a - d M, Y', strtotime($data->created_at)).'</span>
                                    </div>
                                </div>';
        }

        return response()->json(['status' => true, 'data' => $data, 'html' => $html]);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        $data = Message::where(['sender_id' => $id, 'user_id' => 0])
            ->orWhere(['sender_id' => 0, 'user_id' => $id])
            ->orderBy('id', 'asc')
            ->get();
        return view('message.show', compact('data', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }

    public function userMessage(){
        $data = Message::where(['sender_id' => Auth::user()->id, 'user_id' => 0])
            ->orWhere(['sender_id' => 0, 'user_id' => Auth::user()->id])
            ->orderBy('id', 'asc')
            ->get();
        return view('user.message', compact('data'));
    }
}
