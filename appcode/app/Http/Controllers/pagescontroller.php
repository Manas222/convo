<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\employeedetail;
use App\pass;
use App\Classes\bday;
use Session;

class pagescontroller extends Controller
{
    public function login()
    {
        
        return view('pages.login');
    }
    
    public function signup()
    {
        return view('pages.signup');
    }

    public function addDetail()
    {
        
       $res = new employeedetail;
       $res->ename = $_GET['name'];
       $res->post = $_GET['pos'];
       $res->email = $_GET['email'];
       $res->dob = $_GET['dob'];
       $res->save();
       
       return redirect('/');
    }

    public function db()
    {
        $res = test1::all();
        return view('pages.verification',compact('res'));
    }

    public function home()
    {
        return view('pages.homepage');
    }

    public function messenger()
    {
        return view('pages.messenger');
    }

    public function msg()
    {
        $username = Session::get('username');

        $bd = new Bday();
        $bd->checkbd($username);
        
        return view('pages.msg');
    }

    public function verification()
    {
        $username = $_POST['uname'];
        $password = $_POST['psw'];
    
        $ures = json_decode(employeedetail::where('email',$username)->get(['email','id']));
        $userid = $ures[0]->id;
        $usermail = $ures[0]->email;
        
        $pres = json_decode(pass::where('empid',$userid)->get(['epassword']));
        $userpassword = $pres[0]->epassword;

        if($username==$usermail && $password==$userpassword)
        {
            return redirect('msg')->with(['username'=>$username]);
        }
        else
        {
            echo "Wrong Password Or Username";
            return view('pages.login');
        }
        
    } 
}
