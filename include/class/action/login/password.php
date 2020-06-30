<?php 
require_once '../../db.php';
require_once '../../islogedin.php';
require_once '../../securety.php';
require_once '../../query.php';

/*-------------------------------password ------------------------*/ 
if(isset($_POST['info'])){
    // secure the input 

    $info= prot::valid($_POST['info']);
    $info=explode(',',$_POST['info']); 
    $password= prot::valid($info[0]);

    $email= prot::valid($info[1]);
    $stmt="SELECT * FROM users where  email=:email and password=:password";
    $password=md5(strtolower($password));
    $param=[':email'=>$email,':password'=>$password];
        if(!querys::query($stmt,$param)){
            echo "email or password is wrong";
    }
}
?>