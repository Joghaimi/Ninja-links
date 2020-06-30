<?php
class islogedin{
    public static function logedin(){
        if(isset($_COOKIE['LINK'])&&isset($_COOKIE['email'])){
            $token=$_COOKIE['LINK'];
            $user_name=$_COOKIE['email'];//
            $stmt="SELECT user_id FROM token WHERE token=:token and user_name=:user_name";//
            $param=[":token"=>$token,':user_name'=>$user_name];
            if(querys::query($stmt,$param)){
               $user_id= querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC)[0];
                return $user_id['user_id'];
            }else{
                return false;
            }
        }else{
            return false;            
        }
    } 
}

?>