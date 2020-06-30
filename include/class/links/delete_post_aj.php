<?php
require_once '../db.php';
require_once '../islogedin.php';
require_once '../query.php';
require_once '../delete_post.php';
//delete link

if(isset($_POST['post_delete'])){
    $user_id=islogedin::logedin();
    $post_ids=$_POST['post_delete'];
    // echo $post_ids;
    delete::delete_post($post_ids,$user_id);
    $stmt="SELECT titel,body,id FROM links WHERE user_id=:user_id  ORDER BY  id DESC LIMIT 6";
    $param=[":user_id"=>$user_id];
    if(querys::query($stmt,$param)){
        $in_data=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC);
        $i=1;
        foreach($in_data as $key =>$value){
            $i++;
            if($i%2==0){
            echo "<div class='post-blue post'>";
            }else{
            echo "<div class='post-red post'>";            
            }
            echo "<div class='titel'><span  style='font-family:fontawesome' class='titel-icon' >&#xf054 |   </span>".$in_data[$key]['titel']."</div>";
            echo "<div class='body'>".$in_data[$key]['body']."</div>";
            $post_ids=$in_data[$key]['id'];
            if($i%2==0){
                echo "<button  class='col-sm-10 col-sm-off-1 top_btn_red' name=delete".$post_ids." style='font-family:fontawesome' onclick=delete_post($post_ids) >&#xf014 | delete</button>"; 
            }else{
                echo "<button  class='col-sm-10 col-sm-off-1 top_btn_blue' name=delete".$post_ids." style='font-family:fontawesome'  onclick=delete_post($post_ids)>&#xf014 | delete</button>";
            }
            echo "</div> <br>";          
        } 
    }
    echo "</div>";
    
}