<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function application(){
        return $this->hasOne(Document::class);
    }

    public function user_docs(){
        return $this->hasMany(UserDocs::class)->where('status', '!=', 0);
    }

    public function time_lines(){
        return $this->hasMany(TimeLine::class);
    }

    public function initials() {
        $name  = strtoupper($this->name); 
        $remove = ['.', 'MRS', 'MISS', 'MS', 'MASTER', 'DR', 'MR'];
        $nameWithoutPrefix=str_replace($remove," ",$name);
        $words = explode(" ", $nameWithoutPrefix);
        $firtsName = reset($words); 
        $lastName  = end($words);
        echo substr($firtsName,0,1); // this will echo the first letter of your first name
        echo substr($lastName ,0,1); // this will echo the first letter of your last name
    }  
}
