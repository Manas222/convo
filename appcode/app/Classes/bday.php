<?php
namespace App\Classes;

use App\mails;
use App\employeedetail;
use Carbon\Carbon;

class Bday{

    public function send_mail($emp)
    {
        $email = "manas.mahajan1@gmail.com";
        $to = $emp;
        $subject = "GREETINGS";
        $body = "!!!Happy Birthday!!!";
        $headers = 'From: ' .$email . "\r\n".'Reply-To: ' . $email. "\r\n".'X-Mailer: PHP/' . phpversion();
        if (mail($to, $subject, $body, $headers))
        {   
            $mail = new mails;
            $mail->sent_to = $to;
            $mail->mail_sub = $subject;
            $mail->mail_body = $body;
            $mail->save(); 
        }
        else echo("<p>Email delivery failed</p>");
    }

    public function checkbd($username)
    {
        $res = employeedetail::get(['dob','email']);
        $cuser = $username;
        foreach($res as $i){
            $j = $i->dob;
            $emp = $i->email;

            $time = strtotime($j);

            if(date('m-d',$time)!='02-29' && date('Y')%4!=0){
                if(date('m-d') == date('m-d', $time)) {
                    $this->send_mail($emp);
                    if($cuser==$emp){
                        echo'<img src="\convo\imges\happybday.jpg" alt="happy birthday" width="1280" height="250">';
                    }
                }
            }
            elseif(date('m-d',$time)=='02-29' && date('Y')%4!=0){
                if(date('m-d')=='02-28'){
                $this->send_mail($emp);
                echo'<img src="\convo\imges\happybday.jpg" alt="happy birthday" width="1280" height="250">';
                }
            }
            elseif(date('m-d',$time)!='02-29' && date('Y')%4==0){
                if(date('m-d') == date('m-d', $time)){
                $this->send_mail($emp);
                echo'<img src="\convo\imges\happybday.jpg" alt="happy birthday" width="1280" height="250">';
                }
            }
            else{
                if(date('m-d') == date('m-d', $time)){
                $this->send_mail($emp);
                echo'<img src="\convo\imges\happybday.jpg" alt="happy birthday" width="1280" height="250">';
                }
            }   
        }
    }


    public function mail_user($emp)
    {
        $email = "manas.mahajan1@gmail.com";
        $to = $emp;
        $subject = "Birthday Notification";
        $body = "hi";
        $headers = 'From: ' .$email . "\r\n".'Reply-To: ' . $email. "\r\n".'X-Mailer: PHP/' . phpversion();
        if (mail($to, $subject, $body, $headers))
        {   
            $mail = new mails;
            $mail->sent_to = $to;
            $mail->mail_sub = $subject;
            $mail->mail_body = $body;
            $mail->save(); 
        }
        else echo("<p>Email delivery failed</p>");
    }


    public function checkuser($username)
    {
        $res = employeedetail::get(['dob','email']);
        $cuser = $username;
        foreach($res as $i){
            $j = $i->dob;
            $emp = $i->email;

            $time = strtotime($j);

            if(date('m-d',$time)!='02-29' && date('Y')%4!=0){
                if(date('m-d') == date('m-d', $time)) {
                    $this->mail_user($emp);
                    if($cuser==$emp){
                        echo'You are invited';
                    }
                }
            }
            elseif(date('m-d',$time)=='02-29' && date('Y')%4!=0){
                if(date('m-d')=='02-28'){
                $this->mail_user($emp);
                echo'You are invited';
                }
            }
            elseif(date('m-d',$time)!='02-29' && date('Y')%4==0){
                if(date('m-d') == date('m-d', $time)){
                $this->mail_user($emp);
                echo'You are invited';
                }
            }
            else{
                if(date('m-d') == date('m-d', $time)){
                $this->mail_user($emp);
                echo'You are invited';
                }
            }   
        }
    }




}
?>