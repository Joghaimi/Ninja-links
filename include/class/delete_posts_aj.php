<?php
//delete post
require_once 'db.php';
require_once 'islogedin.php';
require_once 'query.php';
require_once 'delete_post_post.php';
if(isset($_POST['post_delete'])){
    $user_id=islogedin::logedin();
    $post_ids=$_POST['post_delete'];
    delete_post::delete_post_post($post_ids,$user_id);
    
    
}