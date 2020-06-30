<?php 
require_once 'db.php';
require_once 'query.php';
require_once 'islogedin.php';
require_once 'delete_post.php';

if(isset($_POST['print'])){
    if($_POST['print']=='na'){
        $stmt="SELECT body,id FROM post WHERE user_id=:user_id ";
        $user_id=islogedin::logedin();
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
            //    newwwwwwwwwwwwwww
                echo "<div class='body'>";
                if(strlen($in_data[$key]['body'])>300){
                    echo nl2br(substr($in_data[$key]['body'],0,200) ." . . . <a href='showmore_mem.php?link_id=".$in_data[$key]['id']."'>[show more]</a>");
             
             
                }else{
                    echo nl2br($in_data[$key]['body']);
                }
                echo "</div>";;
                //    newwwwwwwwwwwwwwwww
                $post_ids=$in_data[$key]['id'];
                if($i%2==0){
                    echo "<button onclick=delet_posts($post_ids);this.parentNode.style.display='none' class='col-sm-10 col-sm-off-1 top_btn_red' name=delete".$post_ids." style='font-family:fontawesome' onclick=delete_post($post_ids) >&#xf014 | delete</button>"; 
                }else{
                    echo "<button onclick=delet_posts($post_ids);this.parentNode.style.display='none' class='col-sm-10 col-sm-off-1 top_btn_blue' name=delete".$post_ids." style='font-family:fontawesome'  onclick=delete_post($post_ids)>&#xf014 | delete</button>";
                }
            
                echo "</div> <br>";
                    
            } 
        }
    }else{
        //print momery like vedio 
        $stmt="SELECT body,id FROM post WHERE user_id=:user_id ";
        $user_id=islogedin::logedin();
        $id=$_POST['print'];
        $param=[":user_id"=>$user_id];
        if(querys::query($stmt,$param)){
            $in_data=querys::query($stmt,$param)->fetchAll(PDO::FETCH_NUM);      
            $in_datas='';
            foreach($in_data as $key => $val){
                $in_datas.=$in_data[$key][0].',';
            }
            $i=1;
            echo "<div class='post-blue post' >";
            echo "<div class='body' id='body'>".$in_data[0][0]."</div>";
            echo "</div> <br>";
            echo '<input type="hidden" name="" id ="mem" value="'.$in_datas.'">
               <input type="hidden" id="index_num" value="1" >
               <button type="" class="col-sm-4 col-lg-4 col-md-4  top_btn_red" onclick="ca()" ><i class="fa  fa-arrow-circle-right fa-2x" aria-hidden="true"></i> </button>';
            echo '<button type="" class="col-sm-4  col-lg-4 col-md-4 top_btn_red" onclick="start_show()" ><i class="fa   fa-play fa-2x" aria-hidden="true"></i> </button>';
            echo '<button type="" class="col-sm-4  col-lg-4 col-md-4 top_btn_red" onclick="pause()" ><i class="fa  fa-pause fa-2x" aria-hidden="true"></i> </button>';
            
            }
        }
    }
