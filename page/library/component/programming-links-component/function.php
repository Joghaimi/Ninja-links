<?php 
if(isset($_GET['power_id'])){
$link_to_print=prot::valid($_GET['power_id']);
$table='programming_sec_link';
}else{
    header('LOCATION:programming.php');
}
/*new stuff */
// isadmin
$user_id=islogedin::logedin();
$stmt='SELECT * FROM admin where id=:user_id';
$param=[':user_id'=>$user_id];
if (querys::query($stmt,$param)){
    $isadmin=true;

}else{
    $isadmin=false;
    
}
/**add section */
if(isset($_POST['add'])){
    $sub_name=prot::valid($_POST['sub_name']);
    $url=prot::valid($_POST['url']);
    $link_to_print=prot::valid($_POST['id']);
    $about=prot::valid($_POST['about']);

    $type=prot::valid($_POST['type']);

    switch($type){
        case "book":  $type=1;
        break;
        case "video":  $type=2;
        break;
        case "website":  $type=3;
        break;
    }


    $stmt='INSERT INTO programming_sec_link(id,name,link,about,types) values(:id,:name,:url,:about,:types)';
 
    $param=['id'=>$link_to_print,':name'=>$sub_name,':url'=>$url,':about'=>$about,':types'=>$type];
 
    if(querys::query($stmt,$param)){
    header("LOCATION:programming_links.php?power_id=$link_to_print");
    }
}
/**new delete link */
if(isset($_POST['delete'])){
    if(isset($_POST['delet_id'])){
        $id=$_POST['delet_id'];
        $link_to_print=prot::valid($_GET['power_id']);        
        $stmt='DELETE FROM programming_sec_link WHERE ids=:ids';
        $param=[':ids'=>$id];
        if(querys::query($stmt,$param)){
            header("LOCATION:programming_links.php?power_id=$link_to_print");
            
        }
    }
}
?>