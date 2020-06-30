<?php 
require_once 'db.php';
require_once 'securety.php';
require_once 'query.php';
require_once 'islogedin.php';
if(isset($_POST['search'])){
    $to_search=$_POST['search'];
    $to_search=prot::valid($to_search);
    if(!empty($to_search)){
        $user_id=islogedin::logedin();    
        $stmt='SELECT * FROM post WHERE body like :body and user_id=:user_id';
        $param=[':body'=>'%'.$to_search.'%',':user_id'=>$user_id];
        if(querys::query($stmt,$param)){
            $serch_resul = querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC);
            foreach($serch_resul as $key => $val){
                echo "<div class ='search_rs'>";
                echo $serch_resul[$key]['body'];
                echo "<br>";
                echo '</div>';
            }
        }else{
            echo 'not found';
        }
    }  
}