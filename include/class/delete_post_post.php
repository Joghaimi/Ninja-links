<?php
class delete_post{
    public static function delete_post_post($post_id,$user_id){
        $query="DELETE from post WHERE id=:id and user_id=:user_id";
        $para=[":id"=>$post_id,":user_id"=>$user_id];
        querys::query($query,$para);

    }
}