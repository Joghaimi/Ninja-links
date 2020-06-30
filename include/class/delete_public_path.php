<?php
require_once 'db.php';
require_once 'islogedin.php';
require_once 'query.php';
require_once 'delete_post.php';

if(isset($_POST['public_link'])){
    $user_id=islogedin::logedin(); 
    $item_id=$_POST['public_link'];
    $stmt='DELETE  FROM public_path WHERE id=:id and user_id=:user_id';
    $param=[':id'=>$item_id,'user_id'=>$user_id];
    querys::query($stmt,$param);
    }else{
    $msg ='wrong !';
    echo "11111111111111111111111";
}