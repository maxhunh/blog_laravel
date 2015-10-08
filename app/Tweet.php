<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{

    // Fix error mass assignable
    // When use Tweet::create('Title tweet', 'Body of tweet');
    // like protected attributes of rails

    protected $fillable = [
        'title',
        'body'
    ];
}
