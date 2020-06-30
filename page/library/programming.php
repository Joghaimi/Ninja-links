<?php
require_once ('../../include/class/all/inc_path.php');

$css_file="home";
$page_name="lib";
$pg_name="programming";

include_once "component/prog/function.php";
include_once "component/prog/header.php";


?>


    <?php require_once '../../include/part/side_bar/side_bar_lib.php';?>
    <div class="body col-sm-10 col-md-10 col-lg-10 col-sm-off-2 col-md-off-2 col-lg-off-2 fix ">
        <div class="body col-sm-10 col-md-10 col-lg-10  fix ">
        <?php require_once '../../include/class/show_msg.php';
            require_once "../../include/part/pagenation/lib.php";
            

    if($isadmin){
echo '
<div class="form">
<form action="programming.php" method="POST">
    <input type="text" name="sectio_name" id="" autofocus style="font-family:fontawesome" class="col-sm-5 col-md-8 col-sm-off-1 col-lg-off-1"
    placeholder="&#xf054|   section_name" required>
    <input type="text" name="about" id="" class="col-sm-5  col-md-9 col-lg-off-1" style="font-family:fontawesome" placeholder="&#xf121 |    about [make it short ^_*]" required>
    <input type="submit" class="col-sm-10 col-sm-off-1 top_btn" value="&#xf02e |ADD" style="font-family:fontawesome" name="add">
    </form>
    <br>
    </div>
    
    ';
    }
    
?>


            <?php include_once "../../include/class/lib/print_programming_section.php";?>
        </div>
    <a href='add.php'><div class='col-sm-2 add col-md-1 col-lg-1'><div class=""><i class="fa fa-lg fa-plus" aria-hidden="true"></i> </div></div></a>
    <?php require_once '../../include/class/show_msg.php';?>

    </diV>
    <script src="../../include/js/ajax.js"></script>
<script src='../../include/js/functions.js'></script>
</body>