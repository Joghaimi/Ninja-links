<?php
require_once ('../../include/class/db.php');
require_once ('../../include/class/query.php');
require_once ('../../include/class/islogedin.php');
require_once ('../../include/class/securety.php');
$user_id=islogedin::logedin();
$stmt='SELECT * FROM admin where id=:user_id';
$param=[':user_id'=>$user_id];
if(!querys::query($stmt,$param)){
    header('LOCATION:../../index.php');
}
$css_file="home";
$page_name='msges';
$stmt='SELECT * FROM uesr_add limit 10';
$param=[];
$added='';
$st=false;
if(querys::query($stmt,$param)){
    $added=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC); 
    $st=true;   
}
// new
if(isset($_POST['delete']) && isset($_POST['delete_id'])){
    $msg_id=$_POST['delete_id'];
    $stmt='DELETE FROM uesr_add WHERE id=:msg_id';
    $param=[':msg_id'=>$msg_id];
    
    if(querys::query($stmt,$param)){
    header('LOCATION:user_added_sub.php');
    }else{
        echo 'no!';
    }
    }
    /*new*/
include_once "../../include/part/header/folder_inside_page_header.php";
?>
</head>
<body>
<div class=" col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix ">
    <div class="main_info ">
        <?php
        $i=1;
        if($st){
            foreach($added as $key =>$value){
                $i++;
                if($i%2==0){
                    echo "<div class='info info-red info-bl col-sm-off-1 col-md-off-1 col-lg-off-1'>";                
                }else{
                    echo "<div class='info info-blue info-bl col-sm-off-1 col-md-off-1 col-lg-off-1'>";                
                }
                echo "<div class='titel'>".$added[$key]['section_name']."</div><br>";
                echo "<div class='body'>".$added[$key]['subject'];
                echo "<br>".$added[$key]['url']."</div>";
                echo '<form action="user_added_sub.php" method="post">';
                echo '<input type="checkbox" name="delete_id" value="'.$added[$key]['id'].'" id="" require> ';
                echo "<input type='submit'  class='col-sm-10 col-sm-off-1 top_btn_blue' name='delete' value='delete' >";
                echo '</form>';
                echo "</div>";
                    
            }
        }else{
            $msg='no openion';
        }
      
        ?>
    </div>
</div>
</body>