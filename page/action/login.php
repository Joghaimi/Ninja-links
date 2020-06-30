<?php 
require_once ('../../include/class/db.php');
require_once ('../../include/class/query.php');
require_once ('../../include/class/islogedin.php');
require_once ('../../include/class/securety.php');
$css_file="logins";
$page_name="log in";
if(islogedin::logedin()){
    header("LOCATION:../../index.php");    
}
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(!empty($email)&&!empty($password)){
        if(prot::email_valid($email)&&prot::valid($password)){
            $stmt="SELECT * FROM users WHERE  password=:password and email =:email";
            $parm=array(":password"=>md5(strtolower($password)),":email"=>$email);
            if(querys::query($stmt,$parm)){
                $all=querys::query($stmt,$parm)->fetchAll(PDO::FETCH_ASSOC);
                $msg="signin";
                $x=true;
                $token=openssl_random_pseudo_bytes(64,$x);
                $token=md5($token);
                $stmt="INSERT INTO token (token,user_id,user_name) values(:token,:id,:user_name)";
                $parm=[':token'=>$token,':id'=>$all[0]['id'],':user_name'=>$email];
                querys::query($stmt,$parm);
                setcookie("LINK",$token,time()+60*60*24*7,'/',NULL,NULL,TRUE);

                setcookie("email",$email,time()+60*60*24*7,'/',NULL,NULL,TRUE);// 
                
                header("LOCATION:../../index.php");
            }else{
                header("LOCATION:login.php?msg=Email or password wrong"); 
            }
        }else{
            header("LOCATION:login.php?msg=Uvalid password OR email");
            $msg="Uvalid password OR email";
        }
    }else{
        
        $msg="Feild can't be empty";
        
    }

}
?>
<html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="../../include/css/bc.css"><link rel="stylesheet" href="../../include/css/grid.css"><link rel="stylesheet" href="../../include/css/logins.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet"><meta http-equiv="X-UA-Compatible" content="ie=edge"><meta http-equiv="X-UA-Compatible" content="ie=edge"><script src="../../include/js/functions.js"></script><script src="../../include/js/ajax.js"></script><title>ninja-links</title></head><body><img src="..\..\include\img\white-logo.png" class=' hidden-sm' style='float:left;' height='120px' alt="ninja-links-logo"><div class="fix"></div><div class="try  col-lg-off-2 col-lg-8 "><div class="fix"></div><div class='row col-lg-off- 1'><div class="mire col-lg-5 col-md-5 hidden-sm" ><span style="font-family: 'Indie Flower', cursive;font-size:20px;"> what can Ninja-Links do ?<span> <br><br><ul style="list-style:none;position:relative;    text-indent:20px;"><li>save your note</li><li>save your links</li><li>find book and tutorials</li><li> and much more</li></ul><br><br><img src="..\..\include\img\prog.png" height=150px width="201" style="float:left" alt=""></div><div class='col-lg-6 log_in_info' style='padding:20px;'><span style="color:black ;font-family: 'Indie Flower', cursive;font-size:30px;"><center><img src="..\..\include\img\logo.png" style='float:left; dispaly:inline;' height='80px' width="113px" alt="what?"></center></span><div class='fix' ></div><form action="login.php" method="post" class="col-sm-12 col-md-12 col-lg-12 "><input  type="email" name="email" id='email' style='font-family:fontawesome' placeholder="&#xf007  | email" class="input-feiled col-sm-12 col-md-12 col-lg-12 fix"onblur="email_adress(this.value)"  required min="4"><input  type="password" name="password"id='password'  style='font-family:fontawesome' placeholder="&#xf023  | password" class=" input-feiled col-sm-12 col-md-12  col-lg-12"onblur="pass(this.value,document.getElementById('email').value)" required min="4"><input type="submit" name='create' value="login" style="font-family: 'Indie Flower', cursive;font-size:35px;padding:5px;"class="input-feiled col-sm-12 col-md-12 col-lg-12 login-btn" ></form><div class="fix"></div><center><div style="color:red;" id='msg'><?php if(isset($_GET['msg'])){echo $_GET['msg']; } ?></center><br><center><span style="color:black;font-family: 'Oxygen', sans-serif;">  you dont have an account ? <a style="color:#FA5252" href="signup.php" class="forget_pass">join us</a></span></center></br></br><a href="forgetpassword.php" class="forget_pass" style="color:#FA5252 ;"> Forget Password ? </a></div></div></div><div class ="backgro" id='particles-js'></div><script src='component/login/function.js'></script><script src='../../include/js/particles.js'></script><script src='../../include/js/app.js'></script></body></html>

