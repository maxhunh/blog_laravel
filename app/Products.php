<?php

namespace App;
// use Eloquent (ORM of laravel) Read more: http://laravel.com/docs/5.0/eloquent
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
      'name',
      'desc',
      'pro_code',
      'created_at'
    ];
}
