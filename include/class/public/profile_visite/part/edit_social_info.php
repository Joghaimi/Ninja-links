
<div class="col-lg-6 col-lg-off-1 col-sm-8  edit-social-account-info left-border-dark-lg" 
    style='display:none;float:left;z-index:20' id='edit-social-account-info'>
    <span style="float:right;cursor:pointer;" class='cross' onclick="this.parentNode.style.display='none';"><i class="fa fa-times" aria-hidden="true"></i></span>
    <span class='font-light'><i class="fa fa-pencil" aria-hidden="true"></i> Edit / add social info</span><br>
    <form action="profile_visit.php?user_id=<?php echo $_GET['user_id'];?>" method='POST' >
            <div class="col-lg-12">
                <input required type="text" name="url" id="" class='input-feiled col-lg-off-1 col-lg-8' style="padding:2px;" placeholder=" account">
                <select name="social" class='input-select  left-border-dark-lg col-lg-2 col-lg-off-1' id="">
                    <option value="facebook_account">facebook account</option>
                    <option value="Linkedin_account">Linkedin account</option>
                    <option value="Gmail_account">Gmail account</option>
                    <option value="google_account">google pluse account</option>
                </select><br>
            </div>
            <input type="submit" name='save_social_info' value="&#xf0c7; save" style='font-family:fontawesome' class='btn-submit col-lg-4 col-lg-off-4 '>
                
    </form>
</div>