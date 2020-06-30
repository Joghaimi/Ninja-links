<?php 
require_once '../../db.php';
require_once '../../islogedin.php';
require_once '../../query.php';
require_once '../../delete_post_post.php';
require_once '../../securety.php';

if(isset($_POST['user_id'])):
    $visit_profile=$_POST['user_id']    ;
    $visitor_id=islogedin::logedin();
    if($_POST['user_id']==$visitor_id){
        $same=true;
    }else{
        $same=false;
    }    
    $show_links_from=prot::valid($_POST['user_id']);
    //sart pagenation    
    echo '
    <div class="col-lg-8 no_margin_btm  visible-lg hidden-sm hidden-md">';
    echo'<a href="profile_visit.php?user_id='.$_POST['user_id'].'"><div class="col-lg-3 blue " style="text-align:center"><i class="fa fa-user  icon-si" aria-hidden="true"></i></div></a>
    <div class="col-lg-3 blue "onclick="show_links_groub('. $visit_profile.');" style="text-align:center"><i class="fa   fa-retweet  icon-si " aria-hidden="true"></i> </div>  
    <div class="col-lg-3 blue active" style="text-align:center"><i class="fa fa-map fa-lg icon-si fa-2x" aria-hidden="true"></i></div>
    </div> ';
    //end pagenation    
    echo '<!-- start pagenation [md,sm] -->
    <div class="col-sm-12 hidden-lg no_margin_btm">';
    echo'<a href="profile_visit.php?user_id='.$_POST['user_id'].'"><div class="col-lg-3 col-md-4 col-sm-4 blue " style="text-align:center;padding:5px;"><i class="fa fa-user  icon-si" aria-hidden="true"></i></div></a>
    <div class="col-lg-3 blue "onclick="show_links_groub('. $visit_profile.');" style="text-align:center;padding:5px;"><i class="fa   fa-retweet  icon-si " aria-hidden="true"></i> </div>  
    <div class="col-lg-3 blue active" style="text-align:center;padding:5px;"><i class="fa fa-map fa-lg icon-si fa-2x" aria-hidden="true"></i></div>
    </div>            
<!-- end pagenation -->';
    
    // start add pathes group
        if($same){
         echo '<div class="col-lg-12 col-sm-8 col-sm-12">
         <span class="col-lg-12 col-sm-12 cursor  info-msg" onclick='."document.getElementById('add_path').style.display='block';".'>add path<i class="fa fa-smile-o" aria-hidden="true"></i></span>
         </div>
             <div id="add_path" style="display:none;" class="add-path col-lg-6 col-sm-8  box-shadow background-white left-border-light-lg">
             <span style="float:right;cursor:pointer;" class=\'cross\' onclick="this.parentNode.style.display=\'none\';"><i class="fa fa-times" aria-hidden="true"></i></span>
             
             <div class="fix"></div><div class="info-msg" style="font-size:10px">share us your experience in learning something [the steps ,the book ,etcetera..]</div>';
                

             echo '<br><br><form action="profile_visit.php?user_id='.$show_links_from.'" method="POST">
             <input type="text" name="name" id=""   autofocus style="font-family:fontawesome" 
             class="col-sm-10 col-md-8 col-sm-off-1 col-lg-off-1"
             style="padding:5px!imprtent;"
             placeholder="&#xf054|   what you learned">
             <select class="col-lg-2 col-sm-10 col-sm-off-1" style="padding:5px;" name="type">
                 <option value="programming">programming</option>
                 <option value="power">power</option>
                 <option value="control">control</option>
                 <option value="mechanical">mechanical</option>
             </select>
             <textarea rows="15" cols="40" type="text" name="paths" id="" class="col-sm-10 col-sm-off-1  col-md-9 col-lg-off-1"
             style="font-family:fontawesome" 
             placeholder="&#xf121 |    how you did it ?"></textarea>
             <input type="submit" class="col-sm-10 col-sm-off-1 top_btn" value=" &#xf079 |share" style="font-family:fontawesome" 
             name="save">
             </form>
             
             
             </div>
        
        ';}
    
        // end add pathes group 

    $stmt='SELECT * FROM public_path WHERE user_id =:user_id';
    $param=[':user_id'=>$show_links_from];
    $public_links=querys::query($stmt,$param);
    if(!empty($public_links)){
        $public_links=$public_links->fetchAll(PDO::FETCH_ASSOC);
        echo "<div id='publik_link'></div>";
        echo "<div class=' info-msg col-lg-12 col-md-12 col-sm-12' style='margin-bottom:10px'> how he/she learn some thing </div><br><br>";
        foreach($public_links as $key =>$value){
            echo "<div class='col-sm-12 col-md-12 col-lg-12 left-border-dark-lg' style='background-color:white;min-height:50px;margin-bottom:20px;'> ";
            switch ( $public_links[$key]['type']){
                case('programming'):echo '<i class="fa fa-code fa-lg" aria-hidden="true"></i>';
                break;
                case('mechanical'):echo '<i class="fa fa-cog fa-lg" aria-hidden="true"></i>';
                break;
                case('power'):echo '<i class="fa fa-bolt fa-lg" aria-hidden="true"></i>';
                break;
                case('control'):echo '<i class="fa fa-microchip fa-lg" aria-hidden="true"></i>';
                break;
            
            }
             echo "<span style='padding-left:10px;'" 
                ."onclick=this.childNodes[1].style.display='block';
                    >".$public_links[$key]['titel'].
                    "<span class='search_rs' style='display:none'>".$public_links[$key]['paths']."</span>".
                "</span>";
        if($same){
            echo "<span  onclick= this.parentNode.style.display='none';delete_public_path(".$public_links[$key]['id'].")
            style='float:right'><i class='fa fa-trash-o fa-lg' aria-hidden='true'></i></span>";
        }
        echo "</div>";
        echo "<br>";
        echo '<div id="d"></div>';
    }
    }else{
    echo "<div class='fix'></div><div class='info-msg'>no pathes yet !</div>";

    }
    echo "</div>";
    endif?>