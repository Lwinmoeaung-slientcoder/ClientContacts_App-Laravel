<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $dates = ['created_at', 'updated_at'];
    protected $table='contacts';
    protected $fillable=[
      
       'id',
       'name', 
        'email', 
       'company',
       'position',
      'phonenumber',
       'phonenumber2' ,
       'file',
       'totalproject'
     
    ];
}
