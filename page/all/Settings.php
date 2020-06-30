<?php 
    include_once "component/Settings/variable.php";
    include_once "component/Settings/path.php";
    include_once "component/Settings/function.php";
    include_once "component/Settings/header.php";
    include_once "component/Settings/side_bar.html";
  
   
?>

<div class=" col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix ">
<?php include_once "component/Settings/pagenation.html"?>
<!-- new idea  -->

 <div class='fix'></div>
<!-- new idea -->



    <?php require_once '../../include/class/show_msg.php';?>
    <!-- for admin onley  -->
    <?php
    $stmt='SELECT * FROM admin WHERE id=:id';
    $param=[':id'=>$user_id];
    if(querys::query($stmt,$param)){
    echo '<div class="main_stuff">
    <div class="info info info-red info-rd col-sm-off-1 col-md-off-1 col-lg-off-1" >Hi , admin ^__^
    <a href="../admin/admin.php"> [ admin panal ]</a></div>
    </div>';    

    }
 
    ?>
    <div class="main_info ">
        <div class ="info info-red info-bl col-sm-off-1 col-md-off-1 col-lg-off-1"><i class="fa fa-user fa-lg icon-si" aria-hidden="true"></i>USER NAME : <?php echo $name; ?></div>
        <div class ="info info-blue info-bl col-sm-off-1 col-md-off-1 col-lg-off-1"><i class="fa fa-envelope-o fa-lg icon-si" aria-hidden="true"></i>EMAIL :  <?php echo $email; ?></div>
        <div class ="info info-red info-bl col-sm-off-1 col-md-off-1 col-lg-off-1"><i class="fa fa-birthday-cake fa-lg icon-si" aria-hidden="true"></i>birth : </div>
            <div class ="info info-blue info-bl  col-md-off-1 col-lg-off-1"><i class="fa fa-tint fa-lg icon-si" aria-hidden="true"></i>chose your best anime character color ! 
        <form method="post" action="Settings.php">
            <select name='them' class='col-sm-10 col-lg-5 col-md-5 col-sm-off-1 col-lg-off-1 col-md-off-1 top_btn_blue'>
            <option value="1">default</option>                
            <option value="2">hinata</option>
            <option value="3">sakura</option>
            <option value="4">kaneki</option>
            </select>
            <input type="submit" class='col-sm-10 col-sm-off-1 col-lg-5 col-md-5  col-lg-off-1 col-md-off-1 top_btn_blue' value="reload"/>
        </form>
        </div>
    </div>
    <div class="main_stuff">
        <div class ="changpassword info info info-blue info-rd col-sm-off-1 col-md-off-1 col-lg-off-1" onclick='changepass();'> <i class="fa fa-key fa-lg icon-si" aria-hidden="true"></i>change password</div>
        <div class="info info info-red info-rd col-sm-off-1 col-md-off-1 col-lg-off-1" ><i class="fa fa-laptop fa-lg icon-si" aria-hidden="true"></i>how many device is logged in : <?php echo $number_of_logedin_devices;?></div>
        <div class="info info info-blue info-rd outfromall col-sm-off-1 col-md-off-1 col-lg-off-1" onclick='logoutfromall()'><i class="fa fa-power-off fa-lg icon-si" aria-hidden="true"></i>logout from all other device</div>    
    </div>
  
    <!-- send your openion  -->
    <div class="main_info ">
        <div class ="info info-red info-bl col-sm-off-1 col-md-off-1 col-lg-off-1"><i class="fa fa-commenting fa-lg icon-si" aria-hidden="true"></i>  
        GIVE US YOUR OPINION OR SUGGESTION</div>
    <div class="suggest col-sm-12 col-md-12 col-lg-12 fix info info-blue info-bl">
    <div class="form">
        <form action="settings.php" method="POST">
            <input type="text" name="name" id=""  style='font-family:fontawesome' class="col-sm-10 col-md-9 col-sm-off-1 col-md-off-1 col-lg-off-1"
            placeholder="&#xf054|   titel">
            <input type="text" name="comment" id="" class="col-sm-10 col-sm-off-1 col-md-9 col-lg-off-1 col-md-off-1" style='font-family:fontawesome' placeholder="&#xf075 |    message">
            <input type="submit" class="col-sm-10 col-sm-off-1 top_btn" value="&#xf1d8 |send" style='font-family:fontawesome' name="send">
        </form>
        <br>
    </div> 
        <!-- out from all -->
    </div>
    <div id='outfromall' class='col-sm-8 col-md-8 col-lg-6 col-lg-off-1  col-md-off-1 '>
        <span  style='cursor:pointer;font-family:fontawesome' class='cross'
         onclick='this.parentNode.parentNode.removeChild(this.parentNode); return false;' >&#xf00d;   </span>
       <br><br>    
        <div class ='msg'>out from all devices ?</div>
        <form action="settings.php" method="post">    
            <input type="submit" name='outfromall' 
            value="log out" class='col-sm-12 col-md-12 col-lg-12 login-btn'>        
        </form>

    </div>
    <div id='changepassword'class=''>
    <span  style='cursor:pointer;font-family:fontawesome' class='cross' onclick='this.parentNode.parentNode.removeChild(this.parentNode); return false;' >&#xf00d;   </span>
   <br><br>
    <form action="settings.php" method="post">
        <input type="text"required  name='current_password'placeholder='current password' class='col-sm-12 col-md-12 col-lg-12 fix'>
        <input type="text"required name='new_password' placeholder='new password' class='col-sm-12 col-md-12 col-lg-12 fix'>
        <input type="text" required name='confirm_password' placeholder='confirm password' class='col-sm-12 col-md-12 col-lg-12 fix'>
        <input type="submit" name='confirm' value="confirm" class="col-sm-12 col-md-12 col-lg-12 login-btn blue">
    </form>
</div>
</div>

<?php include_once "component/Settings/footer.php";