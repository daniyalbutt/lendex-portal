<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function sections(){
        return $this->hasMany(Section::class)->where('section_id', 0);
    }
}
