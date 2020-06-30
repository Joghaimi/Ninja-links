<?php 
require_once '../db.php';
require_once '../islogedin.php';
require_once '../query.php';
require_once '../securety.php';
require_once '../delete_post.php';

if(isset($_POST['links_rate'])){
    $liker_id=islogedin::logedin();
    if($liker_id){
        // extract link info
        $links_info=prot::valid($_POST['links_rate']);
        $links_info=explode(',',$links_info);
        $link_id=$links_info[0];
        $section_id=$links_info[1];
        $tablename=$links_info[2];
        switch($tablename){
            case '1':$tablename="power_sec_link";break;
            case '2':$tablename="control_sec_link";break;
            case '3':$tablename="programming_sec_link";break;
            case '4':$tablename="mech_sec_link";break;
        }
        $stmt="SELECT liker_id FROM $tablename WHERE ids=:ids and id=:id";
        $param=[":ids"=>$link_id,":id"=>$section_id];
        $all_liker=querys::query($stmt,$param);
        // echo $section_id,'  ',$link_id;
        if($all_liker){//make sure that their is liker 
            $all_liker=$all_liker->fetchAll(PDO::FETCH_ASSOC);
            $all_liker=$all_liker[0]['liker_id'];
            $all_liker=explode(',',$all_liker);
            

            if(!in_array($liker_id,$all_liker)){
        
                $stmt="UPDATE  $tablename SET liker_id =:likers , liked=:liked WHERE ids=:ids and id=:id";
                // $liked=$liker;
                $all_liker[]=$liker_id;
                $liked=count($all_liker)-1;
                $all_liker=implode(',',$all_liker);
                $param=[":likers"=>$all_liker,':liked'=>$liked,":ids"=>$link_id,":id"=>$section_id];
                querys::query($stmt,$param);
                echo'<span style="font-size:10px">thanks for voting</span>';
                
            }else{
                echo "<span style='font-size:10px'>voted before </span>";
            }

        }else{
            $stmt="UPDATE $tablename SET liker_id =:likers , liked=:liked WHERE ids=:ids and id=:id";
            $liked=1;
            $all_liker=$liker_id;
            $param=[":likers"=>$all_liker,':liked'=>$liked,":ids"=>$link_id,":id"=>$section_id];
            
            if(querys::query($stmt,$param)){
                echo'<span style="font-size:10px">thanks for voting</span>';
                
            }else{
                echo "some thing wrong";
                
            }
            // echo "no likes yet";
        
        }

    }else{
        echo "sign in first ";
    }

}