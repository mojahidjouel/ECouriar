<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    use HasFactory;

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
