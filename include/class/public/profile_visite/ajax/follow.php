<?php 

require_once '../../../db.php';
require_once '../../../islogedin.php';
require_once ('../../../securety.php');
require_once '../../../query.php';
    if(isset($_POST['user_id'])){//submited
        
            // start following
     
            $visit_profile=prot::valid($_POST['user_id']);
            $user_id=islogedin::logedin();
            $stmt="SELECT * from following where user_id=:user_id";
            $param=[":user_id"=>$user_id];
            $follweing=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC)[0];
            if(!$follweing){

                // if he stsrting folloe from now
                $stmt="INSERT INTO following(user_id,following) values (:user_id,:following)";
                $param=[':user_id'=>$user_id,':following'=>$visit_profile];
                querys::query($stmt,$param);
                echo 'following<i class="fa fa-rss "  style="color:#CC1122;font-size:15px;"aria-hidden="true"></i>';
                

            }else{
                // alredy follow some one pefore
                // pring the pepole who is following
                $stmt="SELECT following from following where user_id=:user_id";
                $param=[':user_id'=>$user_id];
                $following=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC)[0]['following'];
                $following = explode(',',$following);

                if(in_array($visit_profile,$following)){
                    // he is following that person 
                    // unfollow person
                    $remove=array_search($visit_profile, $following);
                    unset($following[$remove]);
                    $following=implode(',',$following);
                    $stmt="UPDATE following SET following = :following WHERE user_id=:user_id";
                    $param=[':user_id'=>$user_id,':following'=>$following];
                    querys::query($stmt,$param);
                    echo 'follow<i class="fa fa-rss "  style="color:green;font-size:15px;"aria-hidden="true"></i>';
                    
                    // print_r($following);
                }else{
                // add the new following
                $following[].=$visit_profile;
                $following=implode(',',$following);
                
                $stmt="UPDATE following SET following = :following WHERE user_id=:user_id";
                $param=[':user_id'=>$user_id,':following'=>$following];
                querys::query($stmt,$param);
                // following msg
                 echo 'following<i class="fa fa-rss "  style="color:#CC1122;font-size:15px;"aria-hidden="true"></i>';
                 
                }
                
                
                //***************we should bring the followein and add the new person  to his data  

            }
        

        
        
        
        
        
    }
?>