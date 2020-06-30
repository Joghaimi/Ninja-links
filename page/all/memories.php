<?php
    include_once "component/memories/variable.php";
    include_once "component/memories/path.php";    
    require_once '../../include/class/savepost.php';
    include_once "component/memories/function.php";    
    include_once "component/memories/header.php";    
?>

<body id='wrab'>
<?php
 require_once 'component/memories/side_bar.html';
?>
<div class="body col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix">
<?php include_once "component/memories/pagenation.html"?>

    <div class="form">
        <form action="memories.php" method="POST">
            <textarea  id="" cols="40" rows="6" name="body" id="" style='font-family:fontawesome' class="col-sm-10 col-md-10 col-sm-off-1 col-md-off-1 col-lg-off-1"
            placeholder="&#xf054|   enter text " autofocus></textarea>
            <input type="submit" class="col-sm-10 col-md-10 col-lg-10 col-sm-off-1 col-md-off-1 col-lg-off-1 top_btn  def-cl" value="&#xf02e |save" 
            style='font-family:fontawesome' name="save">
        </form>
        <br>
    </div>
<div>
<?php require_once '../../include/class/show_msg.php';?>

<div class="body col-sm-12 col-md-12 col-lg-10 col-sm-off-1 col-md-off-1 fix">
    <div id ="play"class="post-red col-sm-5 col-md-5 col-lg-6 right-post" onclick="play_post()">
        <i class="fa fa-play fa-3x ic-c" aria-hidden="true"></i>
    </div>
    <div class="post-blue col-sm-5 col-md-5 col-lg-6  right-post " onclick="show_post()">
        <i class="fa fa-list  fa-3x ic-c" aria-hidden="true"></i>
    </div>
</div>
<br>
<div id ='play_list_icon_container' class="body col-sm-10 col-md-10 col-lg-10 col-sm-off-1 col-md-off-1 fix">

</div>
<span id='bodys'></span>
<?php
require_once '../action/search.php';
include_once "component/memories/footer.php";    
