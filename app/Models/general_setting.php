<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent;

class general_setting extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public function users(){
        return $this->hasMany(User::class);
    }
}
