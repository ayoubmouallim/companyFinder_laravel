<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable=[
        'id','name'
    ];
    protected $hidden=[
    ];

    public $timestamps = false;


    public function companies()
    {
        return $this->hasMany('App\Models\Company', 'category_id', 'id');
    }
  
}
