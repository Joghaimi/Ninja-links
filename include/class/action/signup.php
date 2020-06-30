<?php
require_once '../db.php';
require_once '../islogedin.php';
require_once ('../securety.php');
require_once '../query.php';
require_once ('../send_mail.php');
require_once '../../lib/mail/vendor/autoload.php';
    if(isset($_POST['info'])){//submited
        $info       =   explode(',' ,$_POST['info']);
        $first_name =   $info[0];
        $last_name  =   $info[1];   
        $email      =   $info[2];   
        $pass       =   $info[3];   
        $gender     =   $info[4];
        if( !empty($email)      &&  !empty($pass)   &&  prot::email_valid($email)   &&
            !empty($first_name) &&  !empty($last_name) 
        ){
            $first_name= prot::valid($first_name);//username validate  
            $last_name= prot::valid($last_name);//username validate  
            $gender= prot::valid($gender);//username validate  
            
            if( (strlen($first_name)>20&&strlen($first_name)>=3)||
                (strlen($last_name)>20&&strlen($last_name)>=3)    
            ){ //name length
                echo "<div class='msg'>user name length cant be more thane 20 char or less than 3</div> ";
            }

            $pass= prot::valid($pass);//password validate
            if(strlen($pass)<4){
                echo "password length should be more thane 4 char";
            } 
            $email=htmlspecialchars($email);
            $subject ='new account';
            $body="welcome to spectrum-links , enjoy !";
            $stmt="SELECT * FROM users WHERE email = :email";
            $param=array(":email"=>$email);
            if(!querys::query($stmt,$param)){
                send_mail($subject,$body,$email);
                $stmt="INSERT INTO users (email,password,name,gender,secoundName)values(:email,:password,:name,:gender,:secoundName)";
                $parm=array(":email"=>$email,":password"=>md5(strtolower($pass)),":name"=>$first_name,":gender"=>$gender,":secoundName"=>$last_name);
                if(querys::query($stmt,$parm)){
                echo  "<div class='msg'>mail send ,welcome to our familey</div>";
                // header('Location:index.php');
                }      
            }else{
                echo '<div class="msg">email is exist</div>';
            }




        }
    
    
    
    
    
    }
?>