<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent;

class price extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public function t_city(){
        return $this->belongsTo(city::class,'to_city','id');
    }
    public function f_city(){
        return $this->belongsTo(city::class,'from_city','id');
    }

    public function shipment(){
        return $this->hasMany(Shipment::class);
    }

}
