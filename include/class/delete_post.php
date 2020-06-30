<?php
class delete{
    public static function delete_post($post_id,$user_id){
        $query="DELETE from links WHERE id=:id and user_id=:user_id";
        $para=[":id"=>$post_id,":user_id"=>$user_id];
        querys::query($query,$para);

    }
}