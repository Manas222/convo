<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    protected $table = 'chat';
    
   public function employeedetail()
   {
       return $this->hasMany('App\employeedetail');
   }
}
