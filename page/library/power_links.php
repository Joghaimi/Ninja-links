<?php
$css_file="home";
$page_name="lib";
require_once ('../../include/class/all/inc_path.php');
require_once ('../../include/class/lib/print_section_links_function.php');
require_once ('component/power-links-component/function.php');
include_once "component/power-links-component/header.php";
?>
<body>
    <?php include_once "component/power-links-component/side_bar.php";   ?>
         <div class="body col-sm-10 col-md-10 col-lg-10 col-sm-off-2 col-md-off-2 col-lg-off-2 fix ">
        <div class="body col-sm-10 col-md-10 col-lg-10  fix ">
        <?php require_once '../../include/class/show_msg.php';?>


<!-- ********************add links from admin********************************************** -->
<?php 
    if($isadmin){
    echo ' <div class="form">
    <form action="power_links.php" method="POST">
    <input type="text" name="sub_name" id="" autofocus style="font-family:fontawesome" class="col-sm-5 col-md-8 col-sm-off-1 col-lg-off-1"
    placeholder="&#xf054|   subject_name [or link name (like playlist name or book name)]" required>
    <input type="text" name="url" id="" class="col-sm-5  col-md-9 col-lg-off-1" style="font-family:fontawesome" placeholder="&#xf121 |   url   [make sure its work]" required>
    <input type="text" name="about" id="" class="col-sm-5  col-md-9 col-lg-off-1" style="font-family:fontawesome" placeholder="&#xf121 |  about about this thing right here" required>
    <select name="type" class="col-sm-10 
        col-lg-5 col-md-5 col-sm-off-1 col-lg-off-1 col-md-off-1 top_btn_blue">
        <option value="book">book</option>
        <option value="video">video</option>
        <option value="website">website</option>
    </select>
    <input type="submit" class="col-sm-10 col-sm-off-1 top_btn" value="&#xf02e |ADD" style="font-family:fontawesome" name="add">
    <input type="hidden" name="id" value ='.$_GET['power_id'].'>
    </form>
    <br>
    </div>    
    ';
    }
    ?>
<!-- ********************add links from admin********************************************** -->

<!--*********************link type********************************************************* -->
    <div id='links'>
        <?php include_once "component/power-links-component/link-type.php"; ?>
<!--**************************** link type*************************** -->




<!-- *************************print links at stsrting************************************************** -->
    
        <?php require_once '../../include/class/lib/print_section_links.php';?>
    </div>
<!-- *************************print links at stsrting************************************************** -->


<!--****************************link rate****************************************** -->
<form action="power_links.php?power_id=<?php echo $_GET['power_id'];?>" id="links" method="post"></form>
<!--****************************link rate****************************************** -->

</div>
<?php
    include_once "component/power-links-component/footer.php";