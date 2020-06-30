<?php 
    if(isset($_POST['save_link'])){
        // you should make shure its not emptey
        if (!empty($_POST['name']) &&!empty($_POST['about'])){
            $group_name=prot::valid($_POST['name']);
            $user_id=islogedin::logedin();
            $group_dis=prot::valid($_POST['about']);
            $group_type=prot::valid($_POST['type']);
            $stmt='INSERT INTO public_link_groups(user_id,group_name,group_desc,types) values(:user_id,:group_name,:group_desc,:types)';
            $param=[':user_id'=>$user_id,':group_name'=>$group_name,':group_desc'=>$group_dis,':types'=>$group_type];
            if(querys::query($stmt,$param)){
                //print_section_ajax 
                echo 'ok';
                
            }else{
                echo 'ok';
            }
        }
        }

?>