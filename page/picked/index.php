<?php
$css_file="logins";
$page_name="all";
require_once ('../../include/class/all/inc_path.php');
if(!islogedin::logedin()){
    header('LOCATION:../action/login.php');
}
$user_id=islogedin::logedin();    
if(isset($_POST['save'])){
    if(!empty($_POST['todo'])){
        $add=prot::valid($_POST['todo']);
        additem::addit($user_id,$add);
    }else{
        $msg='the todo feiled is empty !';
    }
    
}

include_once "../../include/part/header/folder_inside_page_header.php";
?>
    <link rel="stylesheet" href="../../include/css/grid.css"> 
    <link rel="stylesheet" href="../../include/css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Risque" rel="stylesheet">        
    <script src="../../include/js/ajax.js"></script>
    <script src='../../include/js/functions.js'></script>

</head>
<?php require_once '../../include/part/side_bar/side_bar_picked.php';?>
<div class=" col-sm-8 col-md-9 col-lg-9 col-sm-off-3 col-md-off-2 col-lg-off-2 fix "
                style='padding-top:0px;padding-left:0px;padding-right:0px;'>
        <div id="content"> 
                <!-- start pagenation -->
                <div class="col-lg-4 no_margin_btm">
                     <div class="col-lg-3 blue active" style="text-align:center"><i class="fa fa-users fa-2x icon-si" aria-hidden="true"></i></div>
                     <div class="col-lg-3 blue " onclick="show_links_groub(<?php echo $visit_profile;?>);" style="text-align:center"><i class="fa   fa-retweet  icon-si" aria-hidden="true"></i> </div>  
                     <div class="col-lg-3 blue" onclick="show_pathes(<?php echo $visit_profile;?>);" style="text-align:center"><i class="fa fa-map fa-lg icon-si" aria-hidden="true"></i></div>
                 </div>            
        
        </div>
            <!-- end pagenation -->
            <!-- best users depend on number of links and click -->

            <!-- best pathes  -->
            <!-- best  links group in each side of siance-->
</div>
