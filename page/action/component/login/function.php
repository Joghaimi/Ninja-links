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
                $msg="Email or password wrong";
            }
        }else{
            $msg="Uvalid password OR email";
        }
    }else{
        
        $msg="Feild can't be empty";
        
    }

}