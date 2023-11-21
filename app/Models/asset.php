<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class asset extends Model
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;
    
    /*
    * relation with user
    */

    public function users(){
        return $this->hasMany(User::class);
    }
}
