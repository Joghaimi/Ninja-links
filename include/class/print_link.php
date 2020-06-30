<?php 
    $stmt="SELECT titel,body,id FROM links WHERE user_id=:user_id  ORDER BY  id DESC LIMIT 6";
    $param=[":user_id"=>$user_id];
    try{
        if(querys::query($stmt,$param)){
            $in_data=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC);
            $i=1;
            foreach($in_data as $key =>$value){
                $i++;
                if($i%2==0){
                echo "<div class='post-blue post' id=$i onclick=copy($i)>";
                }else{
                echo "<div class='post-red post' id=$i onclick=copy($i)>";            
                }
                
                echo "<div class='titel'><span  style='font-family:fontawesome' class='titel-icon' >&#xf054 |   </span>".$in_data[$key]['titel']."</div>";
                echo "<div class='body' >";
                if(strlen($in_data[$key]['body'])>200){
                    echo substr($in_data[$key]['body'],0,100) ." . . . <a href='page/all/showmore.php?link_id=".$in_data[$key]['id']."'>[show more]</a>";
             
             
                }else{
                    echo $in_data[$key]['body'];
                }
                echo "</div>";

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
        echo "</body>";}catch(Exception  $e){  
        $msg='SOME THING WRONG';

}