<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\AdminUser;

class shipment extends Model
{
    use HasFactory;
    
    /*
    * relation with user
    */

    public function deliveryman(){
        return $this->belongsTo(AdminUser::class,'user_id','id');
    }
    public function customer(){
        return $this->belongsTo(User::class,'customer_id','id');
    }

    public function t_city(){
        return $this->belongsTo(city::class,'to_city','id');
    }
    public function f_city(){
        return $this->belongsTo(city::class,'from_city','id');
    }
}
