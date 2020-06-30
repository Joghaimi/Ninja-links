<?php 
    if(!islogedin::logedin()){
        header('LOCATION:login.php');
    }else{
        $user_id=islogedin::logedin();
        $query="SELECT * FROM users WHERE id=:id";
        $param=[':id'=>$user_id];
        $all=querys::query($query,$param)->fetchAll(PDO::FETCH_ASSOC)[0];
        $email=$all['email'];
        $name=$all['name'];
        /*** */
        $stmt='SELECT * FROM token WHERE user_id=:user_id';
        $param=[':user_id'=>$user_id];  
        if(querys::query($stmt,$param)){
            $number_of_logedin_devices=querys::query($stmt,$param)->rowCount();      
        }else{
            $number_of_logedin_devices=0;
        }     
   
    }
    require_once ('../../include/class/action/changpassword.php');

    if(isset($_POST['outfromall'])){
       $stmt='DELETE token FROM token WHERE user_id=:user_id';
       $param=[':user_id'=>$user_id];
       querys::query($stmt,$param);
       header('LOCATION:login.php');
       
    }
    if(isset($_POST['send'])){
        if(!empty($_POST['comment'])&&!empty($_POST['name'])){
            $comment=prot::valid($_POST['comment']);
            $titel=prot::valid($_POST['name']);
            if(strlen($titel)<=255 && strlen($comment)<=300){
               $stmt='INSERT INTO users_openion (id,comment,titel) VALUES(:id,:comment,:titel)';
               $param=[':id'=>$user_id,':comment'=>$comment,':titel'=>$titel];
               if(querys::query($stmt,$param)){
                $msg= " send ^__^ ";           
                }
            }else{
                $msg='to long man !';
            }
        }
    }
    //  newwwwwwwwwwwwwwwwwww

    if(isset($_POST['them'])){
       $them=prot::valid($_POST['them']);
       $stmt='UPDATE users SET them =:them WHERE id=:user_id';
       $param=[':them'=>$them,'user_id'=>$user_id];
       if(querys::query($stmt,$param)){
           header('LOCATION:all.php');
       }
    }