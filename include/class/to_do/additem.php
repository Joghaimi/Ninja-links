<?php
class additem{
    public static function addit($user_id,$item){
        $stat=0;
        $stmt='INSERT INTO todo(user_id,todo,stat) values(:user_id,:todo,:stat)';
        $param=[':user_id'=>$user_id,':todo'=>$item,':stat'=>$stat];
        querys::query($stmt,$param);

    }
}