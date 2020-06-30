<?php 
require_once 'db.php';
require_once 'securety.php';
require_once 'query.php';
require_once 'islogedin.php';
$user_id=islogedin::logedin();
if (isset($_POST['rate'])){

$item=explode(',',$_POST['rate']);
$stmt='SELECT  * FROM  link_rate where  sec_name=:sec_name and link_sec=:link_sec and link_id=:link_id and user_id=:user_id';
$param=[':sec_name'=>$item[0] , ':link_sec' =>$item[2], ':link_id'=>$item[1] ,':user_id'=>$user_id];
$query=querys::query($stmt,$param);
if($query){
    echo 'voted before !';    
  
    if(true){
        $stmt='UPDATE control_sec_link SET liked=1 where ids=:link_id and id=:link_sec ';
        $param=[':link_id'=>$item[1],':link_sec'=>$item[2]];
    }
}else{
    $stmt='INSERT INTO link_rate (sec_name,link_sec ,link_id ,user_id,rate ) values (:sec_name ,:link_sec ,:link_id ,:user_id,:rate)';
    $param=[':sec_name'=>$item[0] , ':link_sec' =>$item[2], ':link_id'=>$item[1] ,':user_id'=>$user_id, ':rate'=>$item[3]];
    querys::query($stmt,$param);
    echo 'thanks !';
    
    if(true){
        $stmt='UPDATE control_sec_link SET liked=1 where ids=:link_id and id=:link_sec ';
        $param=[':link_id'=>$item[1],':link_sec'=>$item[2]];
    }
}

}