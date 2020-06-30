<?php 
    $css_file="logins";
    $page_name="profile";
    include_once "../../include/class/public/inc_path.php";
    include_once "../../include/class/public/profile_visite/all_function.php";
    require_once '../../include/class/public/public_link_grouping/add_section.php';//add section proceger    
    include_once "../../include/part/header/folder_inside_page_header.php";
  
    ?>

        <link rel="stylesheet" href="../../include/css/grid.css"> 
        <link rel="stylesheet" href="../../include/css/home.css">
        <link rel="stylesheet" href="../../include/lib/font-awesome-4.7.0/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Risque" rel="stylesheet">        
        <script src="../../include/js/ajax.js"></script>
        <script src='../../include/js/functions.js'></script>
        
    </head>
    <body>
    <!-- side bar --><?php  require_once '../../include/part/side_bar/side_bar_public.php'?><!-- side bar -->  
    <!-- users info -->
        <div class=" col-sm-8 col-md-9 col-lg-9 col-sm-off-3 col-md-off-2 col-lg-off-2 fix "
        style='padding-top:0px;padding-left:0px;padding-right:0px;'>
    <!-- header info -->
        <!-- image --> 
    <div class='col-lg-12 col-sm-12 col-md-12 ' style="padding-top:0px;padding-right:0px;background-repeat:
            no-repeat;background-image:url('../../include/img/programming.jpeg');position:relative">
        <div style="height:120px;"></div>
        <div class='col-lg-3 col-sm-3 col-md-3' style="position:absolute;top:70px;"></div>
        <div class='fix'></div>
    </div>
    <!--side info  -->
    <!-- start edit social info --><?php include_once "../../include/class/public/profile_visite/part/edit_social_info.php";?><!-- end edit social info -->    
    <div class="col-lg-3 visible-lg  hidden-sm hidden-md  "> <!--start social account info facebook act.. for lg  -->
    <!-- start social icon and info  --><?php include "../../include/class/public/profile_visite/part/social _icon_and _info.php";?><!-- end icon and info  -->
    </div><!--end account info facebook act..  -->
    <div class="col-lg-off-025 col-lg-6 col-sm-12">
    
    <div id="content"><!-- content  [all this replaced in ajax] --> 
    <!-- pagenation start  --><?php
     include_once "../../include/class/public/profile_visite/part/pagenation.php";?><!-- pagenation end  -->
    <div class='col-lg-8  col-sm-12 col-md-12' style="padding-left:5px;padding-top:22.5px;">  <!--For NAme-->
        <div class ='col-lg-6'><span style="font-family: 'Risque', cursive;font-size:40px;color:black;">   <?php echo $name?></span></div> 
        <!--end for name-->
        
        <!--start of foloowing  -->
        <div class ='col-lg-5' style='padding-top:10px' >
           
            <button  style='font-family:fontawesome' id='folow' onclick='follow(<?php echo $_GET["user_id"];?>)'>
             <div id='folow-btn'>  follow
                    <i class="fa fa-rss "  style='color:black;font-size:15px;'aria-hidden="true"></i>
            </div>
            </button>
        </div> <br>
        <!--end of foloowing  -->
    
    
    
    </div>
                                                                                               
                
            <div class="col-sm-12 col-md-3 hidden-lg ">
                <!--start social account info facebook act.. for_sm  -->
                  <?php include "../../include/class/public/profile_visite/part/social _icon_and _info.php";?>

                  <!--start social account info facebook act..  --> 
            </div>
            
            <!--about div  -->
            <div class="col-lg-12 hidden-sm hidden-md visible-lg   col-sm-12 col-md-12 left-border-light-lg" id='content' style='background-color:white;height:300px;margin-bottom:20px;'>
                About <i class="fa fa-info" aria-hidden="true"></i>
            </div>
            <!-- end about div -->

            </div>
            </div>

            </div>

        <?php require_once '../../include/class/show_msg.php';?>
    
    </body>
