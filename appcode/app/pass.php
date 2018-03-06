<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pass extends Model
{
    protected $table = 'pass';
    public $timestamp = false;

    public function employeedetail()
   {
       return $this->hasMany('App\employeedetail');
   }
}
