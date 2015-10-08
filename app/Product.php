<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user()
    {
        $this->hasOne('App\User','id','user_id');
    }
}
