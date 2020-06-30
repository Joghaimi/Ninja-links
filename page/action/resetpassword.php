<?php
require_once ('../../include/class/db.php');
require_once ('../../include/class/query.php');
require_once ('../../include/class/securety.php');
require_once "../../include/class/islogedin.php";
if(isset($_GET['email'])&&isset($_GET['token'])){
$email=prot::valid($_GET['email']);
$token=prot::valid($_GET['token']); 

$stmt='SELECT * FROM users WHERE token=:token and email=:email';
$param=[':token'=>$token,':email'=>$email];

if(querys::query($stmt,$param)){
    $str='0.123456789qwertyiop[]afghfghjkl;vbnm,./';
    $str=str_shuffle($str);
    $str=substr($str,0,10);
    $stmt='UPDATE users SET password=:password WHERE email=:email AND token=:token';
    $param=[':password'=>md5($str),':email'=>$email,':token'=>$token];
    if(querys::query($stmt,$param)){
        $msg= 'your new password is '.$str;
        $stmt='UPDATE users SET token=:token WHERE email=:email';
        $param=[':email'=>$email,':token'=>null];
        querys::query($stmt,$param);
        $msg='it has been changed '.$str;

    }
    
    }else{
        header('LOCATION:signup.php');
    }
}else{
    header('LOCATION:signup.php');
}
$css_file="logins";
$page_name="reset password";

include_once "../../include/part/header/folder_inside_page_header.php";

?>
</head>
<body>
<div class='changpasswords col-sm-8 col-md-8 col-lg-8 col-lg-off-2 col-md-off-2 col-sm-off-2'>
<div class='msg'> reset password:</div>
<?php  include_once '../../include/class/show_msg.php';?>
<a href="login.php"><button  class="col-sm-12 col-md-12 col-lg-12 login-btn">back to log in page</button></a>
</div>
</body>
</html>