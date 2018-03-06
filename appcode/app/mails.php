<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mails extends Model
{
    protected $table = 'mails';
    protected $fillable = ['sent_to','mail_sub','mail_body'];
    public $timestamps = false;

    
    public function employeedetail()
    {
        return $this->hasMany('App\employeedetail');
    }
}
