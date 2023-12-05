<?php

namespace App\Models\Backend;
use App\Models\User;
use App\Models\Shipment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordertrack extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function shipment(){
        return $this->belongsTo(Shipment::class,'shipment_id','id');
    }
}
