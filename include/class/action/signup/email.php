<?php 
require_once '../../db.php';
require_once '../../islogedin.php';
require_once '../../securety.php';
require_once '../../query.php';

/*-------------------------------email adress------------------------*/ 
if(isset($_POST['info'])){
    // secure the input 
   $email_adress= prot::valid($_POST['info']);
   $stmt="SELECT * FROM users where  email=:email";
   $param=[':email'=>$email_adress];
   if(querys::query($stmt,$param)){
       echo "email adress is exist";
   }
}
?>
  