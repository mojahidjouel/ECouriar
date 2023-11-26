<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class company extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(AdminUser::class);
    }
}
