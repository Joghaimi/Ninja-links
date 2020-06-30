<?php 
//start delete admin
require_once ('../../include/class/db.php');
require_once ('../../include/class/query.php');
require_once ('../../include/class/islogedin.php');
require_once ('../../include/class/securety.php');
// make sure its ahmad onley 
$user_id=islogedin::logedin();
$stmt='SELECT * FROM admin where id=:user_id';
$param=[':user_id'=>$user_id];
if(!querys::query($stmt,$param)||$user_id!=1){
    header('LOCATION:../../index.php');
}
// make sure its ahmad onley 

//show admin   
$stmt='SELECT * FROM admin WHERE id!=1';
$param=[];
if (querys::query($stmt,$param)){
    $all_admin=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC);
    $their_admin=true;  
}else{
    echo "no admin ";
    $their_admin=false;    
}
//show admin   
// delete process
if(isset($_POST['delete'])){
    $id=prot::valid($_POST['delete_id']);
    $stmt='DELETE FROM admin WHERE id=:id';
    $param=[':id'=>$id];
    if (querys::query($stmt,$param)){
     header('LOCATION:delete_admin.php');   
    }
}
// delete process

// end delet admin
$css_file="home";
$page_name='admin';
include_once "../../include/part/header/folder_inside_page_header.php";

?>
    <link rel="stylesheet" href="../../include/css/grid.css"> 
    <link rel="stylesheet" href="../../include/css/home.css">
<?php
if($their_admin){
echo '<div class="main_info col-lg-6 col-lg-off-2" style="color:black">';
    foreach($all_admin as $key =>$value){
        
        // echo $all_admin[$key]['id'];
        echo "<div class='info info-red info-bl col-sm-off-1 col-md-off-1 col-lg-off-1'>".$all_admin[$key]['name']."</div>";
        echo '<form action="delete_admin.php" method="post">';
        echo '<input type="checkbox" name="delete_id" value="'. $all_admin[$key]['id'].'" id="" require> ';
        echo "<input type='submit'  class='col-sm-10 col-sm-off-1 top_btn_blue' style='padding:5px;' name='delete' value='delete' >";
        echo '</form>';
    }

echo '</div>';
}

?>