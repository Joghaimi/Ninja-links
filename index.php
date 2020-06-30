<?php 
$css_file="home";$page_name="home";$pg_name="links";
    require_once 'include/class/db.php';
    require_once 'include/class/securety.php';
    require_once 'include/class/query.php';
    require_once 'include/class/islogedin.php';
    require_once 'include/class/delete_post.php';
    include_once "component/function.php";

?>
<!DOCTYPE html><html><head ><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content="ninja-links is free website for save your links and ideas posts or  any text "><meta name="keywords" content="save,links,post,ninja-links,ninja,save-post,save-links,link"><link rel="stylesheet" href="include/lib/font-awesome-4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Harmattan" rel="stylesheet"><meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="include/css/grid.css"> <link rel="stylesheet" href="include/css/home.css"><link rel="stylesheet" href="include/css/about-us.css"> <link rel="icon" type="image/x-icon" href="include\img\top-icon.png" /><title>ninja-links</title>
<?php styleChoose() ?>   
</head>


  
<body id='wrap' >
<?php require_once 'component/side_bar.html';?>
<div class="body col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix">
<?php include_once "component/pagenation.html" ?>
<div class="form"><form action="index.php" method="POST"><input type="text" name="name" id="" autofocus style='font-family:fontawesome' class="col-sm-5 col-md-8 col-sm-off-1 col-lg-off-1"placeholder="&#xf054|   title"><input type="text" name="url" id="" class="col-sm-5  col-md-9 col-lg-off-1" style='font-family:fontawesome' placeholder="&#xf121 |    url"><input type="submit" class="col-sm-10 col-sm-off-1 top_btn" value="&#xf02e |save" style='font-family:fontawesome' name="save"></form><br></div><div id='post_body' >
<?php
        require_once 'include/class/show_msg.php';
        require_once 'include/class/print_link.php';
        require_once 'page/action/search.php';
        include_once "component/footer.html";
?>
