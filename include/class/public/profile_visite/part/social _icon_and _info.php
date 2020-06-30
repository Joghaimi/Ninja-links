<div class="col-lg-12 left-border-dark-lg" style='background-color:white;min-height:300px;line-height:2.5;margin-bottom:20px; '>
    
    <?php if ($same):?>
        <span style='color:#a3a5a5;font-size:15px;float:right;cursor: pointer;' onclick="document.getElementById('edit-social-account-info').style.display='block';"><i class="fa fa-pencil" aria-hidden="true"></i></span>
    <?php endif;?>
    <span><i class="fa fa-link fa-lg"style='color:#232323;font-size:15px;' aria-hidden="true"></i> Links</span><br>

    <span><i class="fa fa-rss "  style='color:#CC1122;font-size:15px;'aria-hidden="true"></i>Number OF Follow</span><br>

    <?php if(!empty($facebook_account)):?>
        <a href='<?php echo $facebook_account;?>'><span  style='color:#232323;font-size:15px;'><i class="fa fa-facebook-square "  style='color:#232323;font-size:15px;'aria-hidden="true"></i> Facebook account </span><br></a>
    <?php endif;?>
    
    <?php if(!empty($Linkedin_account)):?>
        <a href='<?php echo $Linkedin_account;?>'><span  style='color:#232323;font-size:15px;'><i class="fa fa-linkedin-square "  style='color:#232323;font-size:15px;'aria-hidden="true"></i> linkedin profile</span></a><br>
    <?php endif;?>

    <?php if(!empty($Gmail_account)):?>
        <a href='<?php echo $Gmail_account?>'><span  style='color:#232323;font-size:15px;'><i class="fa fa-envelope "  style='color:#232323;font-size:15px;'aria-hidden="true"></i> Follow</span><br></a>
    <?php endif;?>
    
    <?php if(!empty($google_account)):?>
        <a href='<?php echo $google_account?>'><span style='color:#232323;font-size:15px;'><i class="fa fa-google-plus "  style='color:#232323;font-size:15px;'aria-hidden="true"></i> Follow</span><br></a>
    <?php endif;?>
    
    <span><i class="fa fa-birthday-cake "  style='color:#232323;font-size:15px;'aria-hidden="true"></i> birthday </span><br>            
    <?php if($same):?><span style='color:#CC1122'><i class="fa fa-plus" aria-hidden="true"></i> add more </span><?php endif;?>
    <hr style='color:red'>
    <span><i class="fa fa-hashtag" style='color:#CC1122;font-size:15px;' aria-hidden="true"></i>MY advice  (tips)<?php echo $advices;?></span><br>

    <!-- add advice -->
    <?php if($same):?>
    <span class='cursor' onclick="this.nextElementSibling.style.display='block';" 
    style='color:#CC1122;'><i class="fa fa-plus" aria-hidden="true"></i> add advice </span>
    <form action="profile_visit.php?user_id=<?php echo $_GET['user_id'];?>" method="post" id="add_advice" style="display:none">
        <textarea type="text" name="advice_area" class='col-lg-10'  placeholder='add advice less than 255 Letter'></textarea>    
        <input type="submit" style='margin-top:5px;' class='btn-submit'  name= 'advice' value="save">
    </form>
    <?php endif;?>
    <!-- add advice -->

</div>  