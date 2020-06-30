<?php 
require_once '../db.php';
require_once '../islogedin.php';
require_once '../securety.php';
require_once '../query.php';
require_once 'print_section_links_function.php';

/*-------------------------------link type------------------------*/ 
if(isset($_POST['info'])){

    //getting data sended by ajex 
    $links_info=prot::valid($_POST['info']);
    $links_info=explode(',',$links_info);
    $link_to_print_section  = prot::valid($links_info[0]);
    $link_section=prot::valid($links_info[1]); //power ,elect ,act ..  
    $link_type=prot::valid($links_info[2]); //the type of link ->  book ,vedio, act 
    //table name [power =1 ;  mech =2 ; control=3 ;  prog=4 ]
    switch($link_section){
        case '1':$tablename="power_sec_link";break;
        case '2':$tablename="mech_sec_link";break;
        case '3':$tablename="control_sec_link";break;
        case '4':$tablename="programming_sec_link";break;
    }
    // printing links from the table

    // variable needed for this function 
    //user_id
        if(islogedin::logedin()){
            $user_id=islogedin::logedin();
            $loged=true;
        }else{
            $loged=false;
            
        }
        // check for the admin
        $stmt='SELECT * FROM admin where id=:user_id';
        $param=[':user_id'=>$user_id];
        if (querys::query($stmt,$param)){
            $isadmin=true;
        }else{
            $isadmin=false;
        }
    //print pagenation 
    //print pagenation 
    $link_to_print=$link_to_print_section;

    if($link_type=='1'){
        echo '
        <div class="col-lg-12">
        <div class="col-lg-4 visible-lg  hidden-md hidden-sm no_margin_btm">
                <div class="col-lg-3 blue active"   style="text-align:center;padding-bottom: 25px;padding-top: 20px;">
                    <i class="fa fa-book fa-lg icon-si" aria-hidden="true"></i>
                </div>
                
                <div class="col-lg-3 blue"
                     style="text-align:center"
                    onclick=
                        print_links_using_type('. $link_to_print ."," .$link_section.","."2".')
                
                >
                    <i class="fa  fa-video-camera fa-retweet  icon-si" aria-hidden="true"></i>
                </div>   
                
                <div class="col-lg-3 blue" style="text-align:center"
                onclick=print_links_using_type('. $link_to_print ."," .$link_section.","."3".')
                
                >
                    <i class="fa  fa-globe icon-si" aria-hidden="true"></i>
                </div>
                
        </div>
        <div class="fix"></div>';

    }elseif($link_type=='2'){
        echo '
        <div class="col-lg-12">

            <div class="col-lg-4 visible-lg  hidden-md hidden-sm no_margin_btm">
            <div class="col-lg-3 blue "   style="text-align:center;"
            onclick=print_links_using_type('.$link_to_print . "," . $link_section. "," . "1" .')
            >
                <i class="fa fa-book  icon-si" aria-hidden="true"></i>
            </div>
            
                    
                    <div class="col-lg-3 blue active" style="text-align:center;padding-bottom: 25px;padding-top: 20px;"
                    
                    
                    >
                        <i class="fa fa-lg fa-video-camera fa-retweet  icon-si" aria-hidden="true"></i>
                    </div>   
                    
                    <div class="col-lg-3 blue" style="text-align:center"
                    onclick=print_links_using_type('. $link_to_print ."," .$link_section.","."3".')
                    
                    >
                        <i class="fa  fa-globe icon-si" aria-hidden="true"></i>
            </div>
                    
        </div>
        <div class="fix"></div>';

    }elseif($link_type=='3'){
        echo '
        <div class="col-lg-12">
        <div class="col-lg-4 visible-lg  hidden-md hidden-sm no_margin_btm">
                <div class="col-lg-3 blue "   style="text-align:center;"
                onclick=print_links_using_type('.$link_to_print . "," . $link_section. "," . "1" .')
                >
                    <i class="fa fa-book fa-lg icon-si" aria-hidden="true"></i>
                </div>
                
                <div class="col-lg-3 blue" style="text-align:center"
                onclick=print_links_using_type('. $link_to_print ."," .$link_section.","."2".')
                
                >
                    <i class="fa  fa-video-camera fa-retweet  icon-si" aria-hidden="true"></i>
                </div>   
                
                <div class="col-lg-3 blue active" style="text-align:center;padding-bottom: 25px;padding-top: 20px;"
                
                
                >
                    <i class="fa  fa-globe icon-si" aria-hidden="true"></i>
                </div>
                
        </div>
        <div class="fix"></div>';
    }


    //function we well use it for print links 
    // i apliiied it in power links only
    // it well givee error in the other section :)    
    print_links($user_id , $loged ,$tablename , $link_to_print_section , $link_type , $isadmin);
    
    
    
    
    
    
    
    
    
    
    
    
    
    

//     $stmt="SELECT * FROM $tablename WHERE id=:id and types=:types";
//     $param=[":id"=>$link_to_print_section,":types"=>$link_type];
//     $all_link_with_specific_type=querys::query($stmt,$param);
//     if($all_link_with_specific_type){//make sure that their is links
//         $all_link_with_specific_type=$all_link_with_specific_type->fetchAll(PDO::FETCH_ASSOC);
//         $i=0;
//         // print links
        
//         echo "<div id='material'>";
//         foreach($all_link_with_specific_type as $key => $val ){
//             $i++;
//             if($i%2==0){
//                  echo "<div class=' li_li margin_btm'>";
//             }else{
//                  echo "<div class='li_da margin_btm'>";            
//             }
//             echo "<a class='black' target='_blink' href='".$all_link_with_specific_type[$key]['link']."'>".$all_link_with_specific_type[$key]['name']."</a>";
//             // link delete
//             if($isadmin){
//                 echo '<input type="checkbox" name="delet_id" value='.$all_link_with_specific_type[$key]['ids'].' form="links" id="" >';
//                 echo'<input type=submit value=delete name=delete form="links">';
//             }
//             echo "<span style='font-size:10px;float:right;color:red;padding-left:5px;'>likes:".$all_link_with_specific_type[$key]['liked']."</span>";
            
//             // like link 
//             $table_number=0;
//             if($loged){
//                 switch($link_section){
//                     case 'power_sec_link':$table_number=1;break;
//                     case 'control_sec_link':$table_number=2;break;
//                     case 'programming_sec_link':$table_number=3;break;
//                     case 'mech_sec_link':$table_number=4;break;
//                 }
//                 echo '   <i class="fa fa-heart-o fa-2x " id="na'.$all_link_with_specific_type[$key]['ids'].'"style="float:right;color:black" aria-hidden="true"
//                  onclick=this.style.color="red";links_rate('.$all_link_with_specific_type[$key]['ids'].','.$table_number.','.$link_to_print_section.')></i>';
                 
//             }
//             echo "</div> ";
//         }
//         echo "</div>";
//     }else{
//         echo 'no links  until now ';

//     }

// }
}
?>
  