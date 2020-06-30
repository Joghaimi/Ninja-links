<?php
///عملية اضافة لينك بتعمل  اخطاء لازززم اتددلههها
require_once ('../../include/class/all/inc_path.php');
require_once ('../../include/class/lib/print_section_links_function.php');

$css_file="home";
$page_name="lib";
include_once "component/programming-links-component/function.php";
include_once "component/global/for_adding_links_inside_sections.php";

include_once "component/programming-links-component/header.php";

?>

<body>
    <?php require_once '../../include/part/side_bar/side_bar_lib.php';?>
         <div class="body col-sm-10 col-md-10 col-lg-10 col-sm-off-2 col-md-off-2 col-lg-off-2 fix ">
        <div class="body col-sm-10 col-md-10 col-lg-10  fix ">
        <?php require_once '../../include/class/show_msg.php';?>

    <?php 

    if($isadmin){
        add_links_form("programming_links.php", $_GET['power_id']);

// echo '
//     <div class="form">
//     <form action="programming_links.php" method="POST">
//     <input type="text" name="sub_name" id="" autofocus style="font-family:fontawesome" class="col-sm-5 col-md-8 col-sm-off-1 col-lg-off-1"
//     placeholder="&#xf054|   subject_name [or link name (like playlist name or book name)]" required>
//     <input type="text" name="url" id="" class="col-sm-5  col-md-9 col-lg-off-1" style="font-family:fontawesome" placeholder="&#xf121 |   url   [make sure its work]" required>
//     <input type="submit" class="col-sm-10 col-sm-off-1 top_btn" value="&#xf02e |ADD" style="font-family:fontawesome" name="add">
//     <input type="hidden" name="id" value ='.$_GET['power_id'].'>
//     </form>
//     <br>
//     </div>
    
//     ';
    }
    
?>
<!-- ********************add links from admin********************************************** -->

<!--*********************link type********************************************************* -->
<div id='links'>
        <?php include_once "component/programming-links-component/link-type.php"; ?>
<!--**************************** link type*************************** -->




<!-- *************************print links at stsrting************************************************** -->
    
        <?php require_once '../../include/class/lib/print_section_links.php';?>
    </div>
<!-- *************************print links at stsrting************************************************** -->



<form action="programming_links.php?power_id=<?php echo $_GET['power_id'];?>" id="links" method="post"></form>

<?php 
    include_once "component/programming-links-component/footer.php";