<?php 
class logout{
    public static function logout_from_this_device($user_id,$token){
        $stmt="DELETE FROM token WHERE user_id=:user_id and token=:token ";
        $param=["user_id"=>$user_id,"token"=>$token];
        querys::query($stmt,$param);
        setcookie("LINK",$token,time()-60*60*24*7,'/',NULL,NULL,TRUE);
        
    }
    public static function logout_from_all_devices($user_id){
        $stmt="DELETE FROM token WHERE user_id=:user_id";
        $param=["user_id"=>$user_id];
        querys::query($stmt);
        setcookie("LINK",$token,time()-60*60*24*7,'/',NULL,NULL,TRUE);   
    }
}