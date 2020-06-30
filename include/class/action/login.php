<?php 
require_once '../db.php';
require_once '../islogedin.php';
require_once ('../securety.php');
require_once '../query.php';
/*-------------------------------log in------------------------*/ 
if(isset($_POST['info'])){
    $info       =   explode(',' ,$_POST['info']);
    $email      =   $info[0];
    $password   =   $info[1];
    if(!empty($email)   &&  !empty($password)   &&  prot::email_valid($email)){
        $password   =   prot::valid($password);
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
            /*-------------------- add a feild to redirect to index page ------------------------------- */
                //it stell need two click to work -_- 
            echo '<input type="hidden" name="" id="in_" value="go_on">';
        
        }else{
            echo "<div class='fix'></div><div class='msg'>Email or password wrong</div>";
        }
   

    }else{
        
        $msg="Feild can't be empty";
        
    }
    
    
}
?>
  