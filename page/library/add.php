<?php
require_once ('../../include/class/all/inc_path.php');

$css_file="home";
$page_name="lib";

if(!islogedin::logedin()){
       header("LOCATION:../../index.php");    
}else{
    $user_id=islogedin::logedin();
}

if(isset($_POST['send'])){
    if(!empty($_POST['section_name'])&&!empty($_POST['subject'])&&!empty($_POST['url'])){
        $section_name=prot::valid($_POST['section_name']);
        $subject=prot::valid($_POST['subject']);
        $url=prot::valid($_POST['url']);
        $stmt='INSERT INTO uesr_add(user_id ,section_name ,url,subject) values(:user_id ,:section_name ,:url,:subject)';
        $param=[':user_id'=>$user_id,':section_name'=>$section_name,':url'=>$url,':subject'=>$subject];
        if(querys::query($stmt,$param)){
            $msg='send';
       
        }else{
            $msg='try again';
            
       
        }
    }else{
        $msg='!!';
    }

    

}
include_once "../../include/part/header/folder_inside_page_header.php";
?>
<link rel="stylesheet" href="../../include/css/grid.css"> 
<link rel="stylesheet" href="../../include/css/home.css">
<script src="../../include/js/ajax.js"></script>
<script src='../../include/js/functions.js'></script>
</head>
<body>
    <?php require_once '../../include/part/side_bar/side_bar_lib.php';?>
    <div class="body col-sm-10 col-md-10 col-lg-10 col-sm-off-2 col-md-off-2 col-lg-off-2 fix ">
    <form action="add.php" method="POST">
            <input type="text" name="section_name" id="" autofocus style='font-family:fontawesome' class="col-sm-12 col-md-8  col-lg-off-1"
            placeholder="&#xf054|   section_name [power , control , programming ,.. or new section]">
            <input type="text" name="subject" id=""  style='font-family:fontawesome' class="col-sm-12 col-md-8  col-lg-off-1"
            placeholder="&#xf054|   subject">
            <input type="text" name="url" id="" class="col-sm-12  col-md-9 col-lg-off-1" style='font-family:fontawesome' placeholder="&#xf121 |    url contain vedio or book ..">
            <input type="submit" class="col-sm-10 col-sm-off-1 top_btn" value="&#xf02e |send" style='font-family:fontawesome' name="send">
        </form>
          

    </div>
        <div class=' col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix '><?php require_once '../../include/class/show_msg.php';?></div> 
    </body> 