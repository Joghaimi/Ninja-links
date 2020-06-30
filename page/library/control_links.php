<?php
///عملية اضافة لينك بتعمل  اخطاء لازززم اتددلههها
require_once ('../../include/class/all/inc_path.php');
require_once ('../../include/class/lib/print_section_links_function.php');
require_once "component/global/for_adding_links_inside_sections.php";
$css_file="home";
$page_name="lib";

include_once 'component/control-links-component/function.php' ;
include_once 'component/control-links-component/header.php' ;

?>

<body>
    <?php require_once '../../include/part/side_bar/side_bar_lib.php';?>
         <div class="body col-sm-10 col-md-10 col-lg-10 col-sm-off-2 col-md-off-2 col-lg-off-2 fix ">
        <div class="body col-sm-10 col-md-10 col-lg-10  fix ">
        <?php require_once '../../include/class/show_msg.php';?>
<!-- ***************************shawing the form add links for admin************************************************ -->
<?php 
    if($isadmin){
        add_links_form("control_links.php", $_GET['power_id'] );
    }

?>
<!-- ***************************shawing the form add links for admin************************************************ -->



<!-- ********************add links from admin********************************************** -->

<!--*********************link type********************************************************* -->
    <div id='links'>
        <?php include_once "component/control-links-component/links-type.php"; ?>
<!--**************************** link type*************************** -->




<!-- *************************print links at stsrting************************************************** -->
    
        <?php require_once '../../include/class/lib/print_section_links.php';?>
    </div>
<!-- *************************print links at stsrting************************************************** -->




<form action="control_links.php?power_id=<?php echo $_GET['power_id'];?>" id="links" method="post"></form>

</div>
<?php
    include_once "component/control-links-component/footer.php";