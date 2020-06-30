<?php 
    include_once "../../include/class/public/inc_path.php";
    $css_file="logins";
    $page_name="profile";    
    require_once '../../include/class/public/public_link_grouping/add_section.php';//add section proceger
    include_once "../../include/part/header/folder_inside_page_header.php";
?>
    <link rel="stylesheet" href="../../include/css/grid.css"> 
    <link rel="stylesheet" href="../../include/css/home.css">
    <script src="../../include/js/ajax.js"></script>
    <script src='../../include/js/functions.js'></script>
</head>
<body>
<?php require_once '../../include/part/side_bar.php';?>

    <div class='container' style="position:relative;top:100px;">
        <div class='square_add col-lg-3 '>            
                <div>add section</div>
                <i class="fa fa-plus-circle fa-5x" onclick='document.getElementById("new_section").style.display = "block"' style='position:relative;top:30%;'aria-hidden="true"></i>        
        </div>
          <!--print_groups  -->
        <?php require_once '../../include/class/public/public_link_grouping/print_links_group.php';?>
          
        <!-- the add section pub up  -->
        <?php require_once '../../include/class/public/public_link_grouping/add_new_section_the_html.php';?>

    
    </div>

</body>

