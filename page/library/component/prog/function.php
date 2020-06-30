<?php

/*new stuff */
// isadmin
$user_id=islogedin::logedin();
$stmt='SELECT * FROM admin where id=:user_id';
$param=[':user_id'=>$user_id];
if (querys::query($stmt,$param)){
    $isadmin=true;

}else{
    $isadmin=false;
    
}
/**add section */
if(isset($_POST['add'])){
    $sectio_name=prot::valid($_POST['sectio_name']);
    $about=prot::valid($_POST['about']);
    $stmt='INSERT INTO programming_sec(name,about) values(:name,:about)';
    $param=[':name'=>$sectio_name,':about'=>$about];
    if(querys::query($stmt,$param)){
        $msg='added ^_*';
    }
}