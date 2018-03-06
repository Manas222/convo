<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employeedetail extends Model
{
    protected $table = 'employeedetail';
    public $timestamps = false;

   protected $fillable = [
       'ename','email','dob','post'
   ];

   public function pass()
   {
       return $this->belongsTo('App\pass');
   }


   public function chat()
   {
       return $this->belongsTo('App\chat');
   }
}
