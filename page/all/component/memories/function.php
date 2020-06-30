<?php 
    if(!islogedin::logedin()){
        header('LOCATION:login.php');
    }
    if(isset($_POST['save'])){
            if($_SERVER['REQUEST_METHOD']!="POST"){
            header('memories.php');
        }
        if(!empty($_POST['body'])){
                $post=$_POST['body'];
                $date=date("Y/m/d");
                $user_id=islogedin::logedin();
                $msg= save::save_post($user_id,$post,$date);            
        }else{
            $msg="cant save empty post";
        }
    
    }