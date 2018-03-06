<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test1 extends Model
{
    protected $table = 'employeedetail';
    public $timestamps = false;

   protected $fillable = [
       'ename','email','dob','post'
   ];


}
