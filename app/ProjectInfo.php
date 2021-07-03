<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
    protected $dates = ['created_at', 'updated_at'];
    protected $table='project_infos';
    protected $fillable=[
      
       'id',
       'project_name', 
        'contactname', 
       'company',
       'state',
      'project_member',
       'amount' ,
       'startdate',
       'enddate'
     
    ];
}
