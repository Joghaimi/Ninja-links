<?php
class save{
        public static function save_post($user_id,$post,$date){
        $stmt='SELECT * FROM post WHERE user_id=:user_id and dates=:dates';
        $param=[':user_id'=>$user_id,":dates"=>$date];
        $query=querys::query($stmt,$param);
            if(!$query){
                $stmt="INSERT INTO post (user_id,body,dates)values(:user_id,:post,:dates)";
                $param=[':user_id'=>$user_id,':post'=>$post,':dates'=>$date];
                querys::query($stmt,$param);
                return 'saved !';  
            }else{
                if($query->rowCount()<20){
                    $stmt="INSERT INTO post (user_id,body,dates)values(:user_id,:post,:dates)";
                    $param=[':user_id'=>$user_id,':post'=>$post,':dates'=>$date];
                    querys::query($stmt,$param);
                    return 'saved !';  
                }else{
                    return 'you save to much !';
                }
            }
        
       
    }
}