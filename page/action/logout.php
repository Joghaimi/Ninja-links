<?php
require_once '../../include/class/db.php';
require_once '../../include/class/securety.php';
require_once '../../include/class/query.php';
require_once '../../include/class/islogedin.php';
require_once '../../include/class/delete_post.php';
require_once '../../include/class/action/logoutf.php';
if(!islogedin::logedin()){
    header('LOCATION:login.php');
}
$user_id=islogedin::logedin();
$token=$_COOKIE['LINK'];
logout::logout_from_this_device($user_id,$token);
if(!islogedin::logedin()){
    header('LOCATION:login.php');
}
?>