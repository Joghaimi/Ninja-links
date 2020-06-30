<?php
if($_SERVER['REQUEST_METHOD']=='POST'){//enter method
    if(isset($_POST['submit'])){//submited
        if(!empty($_POST['user_name'])){//username
            $name= prot::valid($_POST['user_name']);//username validate  
            if(strlen($name)<=20&&strlen($name)>3){
                if(!empty($_POST['password'])){//password
                    $password= prot::valid($_POST['password']);//password validate 
                    if(strlen($password)>4){
                        $email=$_POST['email'];
                        if(!empty($email)){//email
                            prot::valid($email);
                            if(prot::email_valid($email)){
                                $email=htmlspecialchars($email);
                                $subject ='new account';
                                $body="welcome to spectrum-links , enjoy !";
                                $stmt="SELECT * FROM users WHERE email = :email";
                                $param=array(":email"=>$email);
                                if(true){
                                    send_mail($subject,$body,$email);
                                        $stmt="INSERT INTO users (email,password,name)values(:email,:password,:name)";
                                        $parm=array(":email"=>$email,":password"=>md5(strtolower($password)),":name"=>$name);
                                        if(querys::query($stmt,$parm)){
                                        $msg= "mail send";
                                        header("LOCATION:login.php");
                                        }                      
    

                                }else{
                                    $msg="email is  exist";
                                }
                                
                            }else{
                                $msg=" enter valid email ";
                            } 
                        }else{
                            $msg=" email cant be empty";            
                        }

                    }else{
                        $msg="password length should be more thane 4 char";            
                        
                    }

                }
            }else{
                $msg="user name length cant be more thane 20 char or less than 3 ";            
            }
        }else{
            $msg="user name cant be empty";            
            
        }
    }else{
        $msg="wtf";
    }
}