<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent;

class asset extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    /*
    * relation with user
    */

    public function users(){
        return $this->hasMany(User::class);
    }
}
