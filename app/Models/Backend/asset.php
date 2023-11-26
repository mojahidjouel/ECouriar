<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    /*
    * relation with user
    */
    public function driver(){
        return $this->belongsTo(AdminUser::class,'driver_id','id');
    }
}
