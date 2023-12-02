<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class shipment extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    /*
    * relation with user
    */

    public function users(){
        return $this->hasMany(User::class);
    }

    public function t_city(){
        return $this->belongsTo(city::class,'to_city','id');
    }
    public function f_city(){
        return $this->belongsTo(city::class,'from_city','id');
    }

    public function b_price(){
        return $this->belongsTo(price::class,'b_price','id');
    }
    public function u_size(){
        return $this->belongsTo(price::class,'u_size','id');
    }
    public function s_cost(){
        return $this->belongsTo(price::class,'s_cost','id');
    }
}
