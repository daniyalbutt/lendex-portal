<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    public function repeator_section(){
        return $this->hasMany(Section::class, 'section_id');
    }
    
    public function get_type(){
        if($this->type == 0){
            return 'Text';
        }else if($this->type == 1){
            return 'Textarea';
        }else if($this->type == 2){
            return 'Image';
        }else if($this->type == 3){
            return 'Repeater';
        }
    }
}
