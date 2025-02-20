<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDocs extends Model
{
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function find_status(){
        if($this->status == 1){
            return 'Pending';
        }else if($this->status == 2){
            return 'Approved';
        }else if($this->status == 3){
            return 'Rejected';
        }else if($this->status == 4){
            return 'Uploaded';
        }else if($this->status == 5){
            return 'Resubmission Required';
        }
    }

    public function find_status_class(){
        if($this->status == 1){
            return 'badge-primary';
        }else if($this->status == 2){
            return 'badge-success';
        }else if($this->status == 3){
            return 'badge-danger';
        }else if($this->status == 4){
            return 'badge-warning';
        }else if($this->status == 5){
            return 'badge-secondary';
        }
    }

    public function getExtension(){
        $extension = pathinfo(storage_path($this->file_path), PATHINFO_EXTENSION);
        return $extension.'.png';
    }

}
