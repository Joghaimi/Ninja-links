<?php
require_once ('../../include/class/db.php');
require_once ('../../include/class/query.php');
require_once ('../../include/class/securety.php');
require_once ('../../include/class/islogedin.php');
require_once ('../../include/class/send_mail.php');
require_once '../../include/lib/mail/vendor/autoload.php';

$di=false;

if(isset($_POST['forget_password'])){
    if(!empty($_POST['forget_password'])){

        $email=prot::valid($_POST['email']);
        if(prot::email_valid($email)){
            $stmt='SELECT * FROM users WHERE email=:email';
            $param=[':email'=>$email];
            if(querys::query($stmt,$param)){
                $str='0.123456789qwertyiop[]afghfghjkl;vbnm,./';
                $str=str_shuffle($str);
                $str=substr($str,0,10);
                //you must change tosend variable 
                $tosend="<a href='https://spectrum-links.com/page/action/resetpassword.php?token=$str&&email=$email'>here</a>";//we well change it when connerct to the net work
                send_mail('RESET YOUR PASSWORD',"if you wont to reset the adress please click ".$tosend,$email);
                $stmt='UPDATE  users set token=:token WHERE email=:email';
                $param=[':token'=>$str,':email'=>$email];
                querys::query($stmt,$param);
                $msg='please check your email';
                $di=true;        
            }else{
                $msg='email not exist';
            }
        }    
    }
}
$css_file="logins";
$page_name="reset password";
include_once "../../include/part/header/folder_inside_page_header.php";
?>
<body>
<div class='changpassword col-sm-8 col-md-8 col-lg-8 col-lg-off-2 col-md-off-2 col-sm-off-2'>
    <div class='msg col-lg-6' style='font-size:20px;'> to change your password:</div>
        <form action="forgetpassword.php"class="col-sm-10 col-md-10 col-lg-10 col-lg-off-1 col-md-off-1 col-sm-off-1" method="post">
            <input type="email" name="email"  style='font-size:20px;' id="" style='font-family:fontawesome' class="mail col-sm-12 col-md-12 col-lg-12 fix" placeholder="&#xf007  | email" class="col-sm-12 col-md-12 col-lg-12 fix" required>
            <input type="submit" value="reset password"   style='font-size:20px;'class="col-sm-6 col-md-12 col-lg-12 login-btn" name='forget_password'<?php if($di){echo 'disabled';};?> >
        </form>
        <div class'fix col-sm-8' style="clear:both">
            <?php require_once '../../include/class/show_msg.php';?>
        </div>
    </div>
    
    

</body>
</html>