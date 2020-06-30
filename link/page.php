<?php
// pathes
    include_once "component/page/path.php";

// function
    include_once "component/page/function.php";

// header
    include_once "component/page/header.php" ;
//  head (search , logo , name
include_once "component/page/head.php";
//  pagenaiton 
include_once "component/page/pagenation.php";
?>
<!-- if is admin -->
<!-- add-section -->
<br>
<br>
<br>
<br>
<br>
<button class='btn btn-green' onclick ='document.getElementById("add-material").style.display="block"'>اضافة مادة</button>
<!-- adding subject form -->
<div class='col-sm-10  floting-form ' id='add-material'>
<form action="page.php?page_name=<?php echo  $page_name; ?>" method="POST">
<input type="text" name="name" id="" autofocus style='font-family:fontawesome' class="col-sm-10 col-md-8 col-sm-off-1 col-lg-off-1"
    placeholder="&#xf054|   اسم المادة">
<input type="text" name="name" id="" autofocus style='font-family:fontawesome' class="col-sm-10 col-md-8 col-sm-off-1 col-lg-off-1"
    placeholder="&#xf054|   اسماء اخرى للماده ">
    <input type="text" name="name" id="" autofocus style='font-family:fontawesome' class="col-sm-10 col-md-8 col-sm-off-1 col-lg-off-1"
    placeholder="&#xf054|   وصف الماده ">
<input type="submit" class="col-sm-10 col-sm-off-1 top_btn" value="&#xf02e |save" style='font-family:fontawesome' name="save">
</form>
</div>
<!-- add section -->

<div id="container">

</div>

<?php 
include_once "component/page/footer.php";