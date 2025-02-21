<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\DocumentAdded;

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
        //
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

        return response()->json(['status' => true, 'data' => $data, 'html' => $html]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
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
            ->orderBy('id', 'desc')
            ->get();
        return view('user.message', compact('data'));
    }
}
