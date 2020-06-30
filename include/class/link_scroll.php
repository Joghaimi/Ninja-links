<?php 
require_once 'db.php';
require_once 'securety.php';
require_once 'query.php';
require_once 'islogedin.php';
if(isset($_POST['post_id'])){
    $offset=$_POST['post_id'];
    if($offset<100){
    $user_id=islogedin::logedin();
    $stmt="SELECT titel,body,id FROM links WHERE user_id=:user_id ORDER BY  id DESC LIMIT 5 OFFSET  $offset ";
    $param=[':user_id'=> $user_id ,];
    if(querys::query($stmt,$param)){
        $in_data=  querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC);
        $i=0;
        $b=6;

       try{
        foreach($in_data as $key =>$value){
        $b++;
      
        $is=$b.'a';
            if($i==0){
            echo "<div class='post-blue post'  id=ahmad onclick=copy($is)>";
                $i=1;
            }else{
            echo "<div class='post-red post'  id=$b onclick=copy($b)>";
            $i=0;
            }
            echo "<div class='titel'><span  style='font-family:fontawesome' class='titel-icon' >&#xf054 |   </span>".$in_data[$key]['titel']."</div>";
            echo "<div class='body'>".$in_data[$key]['body']."</div>";
            $post_ids=$in_data[$key]['id'];
            if($i!=0){
                echo "<button  class='col-sm-10 col-sm-off-1 top_btn_red' name=delete".$post_ids." style='font-family:fontawesome' onclick=delete_post($post_ids) >&#xf014 | delete</button>";                 
            }else{
                echo "<button  class='col-sm-10 col-sm-off-1 top_btn_blue' name=delete".$post_ids." style='font-family:fontawesome'  onclick=delete_post($post_ids)>&#xf014 | delete</button>";
                
            }
        
            echo "</div> <br>";   
        }
}catch(Exception  $e){
    $msg='SOME THING WRONG';

}
    }
}
}