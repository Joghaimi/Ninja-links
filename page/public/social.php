<?php
 $css_file="logins";
 $page_name="social";
 include_once "../../include/class/public/inc_path.php";
 if(!islogedin::logedin()){
     header('LOCATION:login.php');
 }
include_once "../include/part/header.php";
?>
<link rel="stylesheet" href="../include/css/grid.css"> 
<link rel="stylesheet" href="../include/css/home.css">
<script src="../include/js/ajax.js"></script>
<script src='../include/js/functions.js'></script>
</head>
<?php require_once '../include/part/side_bar.php';?>
<div class="body col-sm-10 col-md-10 col-lg-10 col-sm-off-2 col-md-off-2 col-lg-off-2 fix lib-cont">
    <div class="col-lg-6 col-md-6 col-sm-12 ">
        <a href='power.php'><div class="icons icons-bd">
            <i class="fa  fa-lightbulb-o fa-3x" aria-hidden="true"></i>
            <span>giva a tips !</span>
            </div></a>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
    <a href='control.php'> <div class="icons  icons-bd">
            <i class="fa  fa-heart fa-3x" aria-hidden="true"></i>
            <span>take a tips ..</span>
        </div></a>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
    <a href='programming.php'><div class="icons  icons-bd"> 
             <i class="fa fa-question fa-3x" aria-hidden="true"></i>
             <span>ask enginners</span>
        </div></a>
    </div>
    <a href='mech.php'><div class="col-lg-6 col-md-6 col-sm-12">
        <div class="icons  icons-bd">
        <i class="fa fa-quote-left fa-3x" aria-hidden="true"></i>
        <span>quotes</span>
        </div></a>
    </div>  
    </div>
    </body>
