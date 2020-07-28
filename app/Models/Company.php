<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table= 'companies';
    protected $fillable=[
        'id','company_title','company_website','company_address','company_sector','company_mail','company_city','category_id','company_tel'
    ];
    protected $hidden=[
        
    ];
    public $timestamps = false;



  public function categories()
  {
      return $this->belongsTo('App\Models\Category', 'category_id', 'id');
  }

}
