<?php 
 if(isset($_POST['confirm'])){ 
            if(!empty($_POST['confirm_password'])&&!empty($_POST['new_password'])&&!empty($_POST['confirm_password'])){         
                if($_POST['new_password']==$_POST['confirm_password']){                    
                    if(strlen($_POST['new_password'])>4){
                        $old_password=$_POST['current_password'];
                        $old_password=prot::valid($old_password);
                        $stmt='SELECT * FROM users WHERE id=:user_id and password=:password';
                        $param=[':password'=>md5($old_password),':user_id'=>$user_id];
                        if(querys::query($stmt,$param)){
                        $new_password=prot::valid($_POST['new_password']);
                        $stmt='UPDATE users SET  password=:new_password where id=:user_id';
                        $param=[':new_password'=>md5($new_password),':user_id'=>$user_id];
                        querys::query($stmt,$param);
                        $msg='password changed';
                        }else{
                            $msg='the old password wrong ';
                            
                        }
                    }else{
                    $msg='the new password to short ';
                    
                    }
                   
                }else{
                    $msg='the new password not match ';
                    
                }
        }else{
            $msg='feiled cant be emptey ';
            
        }
        }
        ?>