<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function user(){
        return $this->hasOne(User::class, 'id', 'sender_id');
    }

    public function last_message(){
        return DB::table('messages')->where('sender_id', $this->sender_id)->orWhere('user_id', $this->sender_id)->orderBy('id', 'desc')->first();
    }
}
