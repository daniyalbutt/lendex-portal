<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    public function convertToArray(){
        return json_decode($this->document);
    }

    public function find_name(){
        $array = json_decode($this->document);
        foreach ($array as $key => $element) {
            if ('business_legal_name' == $key) {
                return $element;
            }
        }
        return false;
    }

    public function find_email(){
        $array = json_decode($this->document);
        foreach ($array as $key => $element) {
            if ('email' == $key) {
                return $element;
            }
        }
        return false;
    }

    public function find_status(){
        if($this->status == 1){
            return 'Pending';
        }else if($this->status == 2){
            return 'Approved';
        }else if($this->status == 3){
            return 'Rejected';
        }else if($this->status == 4){
            return 'In Process';
        }
    }

    public function notification_status(){
        if($this->status == 1){
            return 'Your Application is Pending';
        }else if($this->status == 2){
            return 'Your Application has Approved';
        }else if($this->status == 3){
            return 'Your Application has been Rejected';
        }else if($this->status == 4){
            return 'Your Application is now in Process';
        }
    }

    public function find_status_class(){
        if($this->status == 1){
            return 'btn-primary';
        }else if($this->status == 2){
            return 'btn-success';
        }else if($this->status == 3){
            return 'btn-danger';
        }else if($this->status == 4){
            return 'btn-info';
        }
    }

    public function find_status_alert_class(){
        if($this->status == 1){
            return 'primary';
        }else if($this->status == 2){
            return 'success';
        }else if($this->status == 3){
            return 'danger';
        }else if($this->status == 4){
            return 'info';
        }
    }

    public function find_key($keyword){
        $array = json_decode($this->document);
        foreach ($array as $key => $element) {
            if ($keyword == $key) {
                return $element;
            }
        }
        return false;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function image_path(){
        if($this->status == 1){
            return 'images/status/application-pending.png';
        }else if($this->status == 2){
            return 'images/status/application-aprroved.png';
        }else if($this->status == 3){
            return 'images/status/application-rejected.png';
        }else if($this->status == 4){
            return 'images/status/application-inprogress.png';
        }
    }
}
