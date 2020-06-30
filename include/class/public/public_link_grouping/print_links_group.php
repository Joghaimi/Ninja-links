<?php
include_once 'inc_path.php'; 

// print links in ajax 
if(isset($_POST['user_id'])){
    $visit_profile=$_POST['user_id'];
    $visitor_id=islogedin::logedin();
    if($_POST['user_id']==$visitor_id){
        $same=true;
    }else{
        $same=false;
    }

    //start pagenation  
    echo '<div class="col-lg-12 col-sm-12 visible-lg  hidden-sm hidden-md no_margin_btm"><div class="col-lg-10 no_margin_btm">';
    echo'<a href="profile_visit.php?user_id='.$_POST['user_id'].'"><div class="col-lg-3 col-md-4 col-sm-4 blue " style="text-align:center"><i class="fa fa-user  icon-si" aria-hidden="true"></i></div></a>
    <div class="col-lg-3 col-md-4 col-sm-4 blue blue active"  style="text-align:center"><i class="fa   fa-retweet  icon-si fa-2x" aria-hidden="true"></i> </div>  
    <div class="col-lg-3 col-md-4 col-sm-4 blue blue" onclick="show_pathes('. $visit_profile.')" style="text-align:center"><i class="fa fa-map fa-lg icon-si" aria-hidden="true"></i></div>
    </div></div>
    ';
    echo '<!-- start pagenation [md,sm] -->
    <div class="col-lg-8 col-sm-12 hidden-lg no_margin_btm">';
    echo'<a href="profile_visit.php?user_id='.$_POST['user_id'].'"><div class="col-lg-3 col-md-4 col-sm-4 blue " style="text-align:center;padding:5px;"><i class="fa fa-user  icon-si" aria-hidden="true"></i></div></a>
    <div class="col-lg-3 col-md-4 col-sm-4 blue blue active"  style="text-align:center;padding:5px;"><i class="fa   fa-retweet  icon-si fa-2x" aria-hidden="true"></i> </div>  
    <div class="col-lg-3 col-md-4 col-sm-4 blue blue" onclick="show_pathes('. $visit_profile.')" style="text-align:center;padding:5px;"><i class="fa fa-map fa-lg icon-si" aria-hidden="true"></i></div>
    </div>            
    <!-- end pagenation -->';
    //end pagenation

    //start  add groub link
    if ($same){
        echo "<div class='col-lg-12 cursor ' style='font-size:15px;'>            
                    <div class=' info-msg'> 
                    add Link group <i class='fa fa-plus-circle fa-lg' onclick='document.getElementById(\"new_section\").style.display = \"block\"' style='position:relative;top:30%;'aria-hidden='true'></i> 
                    </div>
                </div>";
        
            echo "<div class=' info-msg col-lg-12 col-md-12  col-sm-12 fix'><span>links group</span></div>";
        }
    include_once "add_new_section_the_html.php";
    //end add groub link
    // links in group 
    ?>

    <div style="display:none" class='add_new_section col-lg-6 col-md-8 col-sm-8 left-border-light-lg' id='links_in_group'>
     <span style="float:right;cursor:pointer;" class='cross' onclick="this.parentNode.style.display='none';"><i class="fa fa-times" aria-hidden="true"></i></span>
    </div>
    <?php
    
    // link in the group
    //start  print_links group  
    $user_id=prot::valid($_POST['user_id']);
    $stmt='SELECT * FROM public_link_groups where user_id=:user_id';
    $param=[':user_id'=>$user_id];
    if(querys::query($stmt,$param)){
    $all_section=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC);
    foreach($all_section as $key=>$value){
       switch($all_section[$key]['types']){
           case('programming'):$sec ='<i class="fa fa-code fa-lg" aria-hidden="true"></i>';
           $overley_sec='<i class="fa fa-code fa-2x" aria-hidden="true"></i>';
           break;
           case('mechanical'):$sec = '<i class="fa fa-cog fa-lg" aria-hidden="true"></i>';
           $overley_sec='<i class="fa fa-cog fa-2x" aria-hidden="true"></i>';       
           break;
           case('power'):$sec = '<i class="fa fa-bolt fa-lg" aria-hidden="true"></i>';
           $overley_sec='<i class="fa fa-bolt fa-2x" aria-hidden="true"></i>';
           break;
           case('control'):$sec = '<i class="fa fa-microchip fa-lg" aria-hidden="true"></i>';
           $overley_sec='<i class="fa fa-microchip fa-2x" aria-hidden="true"></i>';
           break;
           }
        echo "<div class='col-lg-12 col-md-12 col-sm-12 left-border-dark-lg' style='background-color:white;min-height:200px;margin-bottom:20px; word-wrap: break-word;'> ";
        
        //    icon and titel
        echo "<div class='col-lg-12 col-md-12 col-sm-12'><a style='color:black'href='share_links.php?user_id=".$user_id."&&section_id=".$all_section[$key]['group_id']." '>".$sec.'</a>'. $all_section[$key]['group_name'].'</div>'; 
        echo "<hr><br>";
    
        //    icon and titel
        echo '<div class="col-lg-12 col-md-12 col-sm-12 left-border-light-lg" >';
        echo $all_section[$key]['group_desc'];
        echo '</div>';
        echo "<div class ='font-light cursor' style='float:right;font-size:10px;' onclick=\"show_links('".$user_id.",".$all_section[$key]['group_id']."'); document.getElementById('links_in_group').style.display = 'block'\">click to see the links <i style='font-size:15px;' class=\"fa  fa-eye\" aria-hidden=\"true\"></i></div>";
        echo "<div class='fix '></div><div onclick=document.getElementById('share-group-link".$all_section[$key]['group_id']."').style.display='block'; class='font-dark cursor' style='float:right;margin-top:7px;font-size:10px'>share this group with  friend <i class=\"fa fa-share\" aria-hidden=\"true\"></i></div>";
        if ($same){echo "<a href ='share_links.php?user_id=".$user_id."&& section_id=".$all_section[$key]['group_id']."'><div class='fix '></div><div class='font-dark cursor' style='float:right;margin-top:7px;font-size:10px'>add some links <i class=\"fa fa-plus\" aria-hidden=\"true\"></i></div></a>";}        
        echo "<input class='col-lg-12' type='text' style='display:none;font-size:12px;padding:5px;' value ='https://spectrum-links.com/page/public/share_links.php?user_id=".$user_id."&&section_id=".$all_section[$key]['group_id']."' id='share-group-link".$all_section[$key]['group_id']."'/>";
        echo "</div>";  
    //end  print_links group  
    
    // show links in group 
    // include_once "print_publick_link.php";
  

    // 
    }
    }else{

     echo "<div class=' info-msg col-lg-12 fix'><span>no links yet</span></div>";
     }
}else{
    $msg= "oops !!";
}