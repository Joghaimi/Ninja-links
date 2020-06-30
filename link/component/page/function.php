<?php 
// to know if admin 
    if(!islogedin::logedin()){
        $user_page_id=0;
    }else {
        $user_page_id=islogedin::logedin();
    }

//page info 
    if(isset($_GET['page_name'])){
        $page_name= prot::valid($_GET['page_name']);
        $stmt='SELECT * FROM page WHERE page_name=:page_name';
        $param=[':page_name'=>$page_name];
        $query=querys::query($stmt,$param);
        if($query){
            $query=$query->fetchAll(PDO::FETCH_ASSOC)[0];

            $specialty= $query['specialty'];
            $University= $query['University'];
            $admin= $query['admin'];
            $admin=str_split($admin);
            if (in_array($user_page_id,$admin)) {
                $is_page_admin=true;
            }else{
                $is_page_admin=false;
            }
        }
    }else{
        header('LOCATION:../index.php');
    }
?>