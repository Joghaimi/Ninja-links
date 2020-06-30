<?php
require_once ('../../include/class/all/inc_path.php');
$user_id=islogedin::logedin();
if(isset($_GET['link_id'])){
$id=prot::valid($_GET['link_id']);
$stmt='SELECT * FROM links where user_id=:user_id and id=:id';
$param=[':user_id'=>$user_id ,':id'=>$id];
$querys=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC);
if(!$querys){
    header("LOCATION:../../index.php");
}
}else{
    header("LOCATION:../../index.php");
}

$css_file="home";
$page_name='msges';
include_once "../../include/part/header/folder_inside_page_header.php";
?>
</head>
<body>
<!-- <div class=" col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix "> -->
<div class="main_info ">
<?php
        echo "<div style='height:auto' class='info info-red info-bl col-sm-10 col-md-10 col-lg-8'>"; 
        echo "<div class='titel'>".$querys[0]['titel']."</div><br>";
        echo "<div class='body' >".$querys[0]['body']."</div>";  
        ?>
</div>
       
    <!-- </div> -->

</body>