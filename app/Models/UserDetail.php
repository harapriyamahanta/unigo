<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //
    public function usercategory(){
        return $this->hasOne('App\Models\Category', 'id');
    }
}
