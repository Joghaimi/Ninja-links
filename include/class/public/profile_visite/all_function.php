<?php 
//is logged in start  
    if(!islogedin::logedin()){
        $user_id=0;
    }else{
        $user_id=islogedin::logedin();
    }
//is logged in end

// start make sure that he enterd avalied profile with user_id
    if(isset($_GET['user_id'])){
        if($_GET['user_id']==$user_id){
            $same=true;
            $visit_profile=prot::valid($_GET['user_id']);            
        }else{
            $same=false;
            $visit_profile=prot::valid($_GET['user_id']);
        }
    }else{
        header('location:../../index.php');
    }
// end make sure that he enterd avalied profile with user_id

//start inserting social info 
    if(isset($_GET['user_id'])){
        if($_GET['user_id']==$user_id && isset($_POST['save_social_info'])){
            if(!empty($_POST['url'])&&!empty($_POST['social'])){
                $social_info=prot::valid($_POST['url']);
                $social_type=prot::valid($_POST['social']);
                $stmt="UPDATE  users SET $social_type =:facebook_account WHERE id=:user_id";
                $param=[':facebook_account'=>$social_info,':user_id'=>$user_id];
                querys::query($stmt,$param);
                
            }
        }
    }
//end inserting social info and usrer_info

// satrt getting main info
    if(isset($_GET['user_id'])){
        $visit_profile=prot::valid($_GET['user_id']);
        $stmt="SELECT name,facebook_account,Linkedin_account,Gmail_account,google_account,birth_day,advice from users 
        WHERE id=:user_id";
        $param=[':user_id'=>$visit_profile];
        if(querys::query($stmt,$param)){
            $info=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC)[0];
            $name=$info['name'];
            $facebook_account=$info['facebook_account'];
            $Linkedin_account=$info['Linkedin_account'];
            $Gmail_account=$info['Gmail_account'];
            $google_account=$info['google_account'];
            $birth_day=$info['birth_day'];
            $advices=$info['advice'];    
        }else{
            echo 'error';
        }
        
    }
// end getting main info

// start add advice
    if(isset($_POST['advice'])){
        $stmt="UPDATE users set advice=:addvice Where id=:user_id";
        $user_id= $user_id;
        $advice=prot::valid($_POST['advice_area']);
        $param=[':addvice'=>$advice,':user_id'=>$user_id];
        querys::query($stmt,$param);
        // echo "work";
    }

// end add advice
    
//start for save pathes 
    if(isset($_POST['save'])){
        if(!empty($_POST['name'])&&!empty($_POST['paths'])){
             $titel=prot::valid($_POST['name']);
             $paths=prot::valid($_POST['paths']);
             $type=prot::valid($_POST['type']);            
             $stmt="SELECT * FROM public_links WHERE user_id=:user_id and dates=:dates ";
             $param=[':user_id'=>$user_id,":dates"=>date("Y/m/d")];
             $query=querys::query($stmt,$param);
             if(!$query){
                 $stmt='INSERT INTO public_path(user_id,type,titel,paths,dates) values(:user_id,:type,:titel,:paths,:dates)';
                 $param=[':user_id'=>$user_id , ":type"=>$type , ":titel"=>$titel,":paths"=>$paths ,":dates"=>date("Y/m/d")];
                 if(querys::query($stmt,$param)){
                     $msg='save';
     
                 }else{
                     $msg='some thing wrong! ';
                 }
             }else{
 
                 if($query->rowCount()<20){
                     $stmt='INSERT INTO public_path(user_id,type,titel,paths,dates) values(:user_id,:type,:titel,:paths,:dates)';
                     $param=[':user_id'=>$user_id , ":type"=>$type , ":titel"=>$titel,":paths"=>$paths ,":dates"=>date("Y/m/d")];                    
                     if(querys::query($stmt,$param)){
                         $msg='save ';
         
                     }else{
                         $msg='some thing wrong! ';
                     }
                 }else{
                     $msg='you cant share more than 20 links in one day';                
                 }
             }         
         }else{
             $msg='empty ?';
         }
     }
//end for save pathes 









// end following


    
?>