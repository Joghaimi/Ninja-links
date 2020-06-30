<?php 
include_once "component/signup/include_path.php";
$param="";
$css_file="logins";
$page_name="sign up";
 include_once "component/signup/header.php";
 include_once "component/signup/function.php";
?>

    <!-- the big div -->
    <img src="..\..\include\img\white-logo.png" class=' hidden-sm' style='float:left;' height='120px' alt="ninja-links-logo">
    <div class="fix"></div>    
    <div class="try  col-lg-off-2 col-lg-8 ">
        <!-- image -->
        
        <div class="fix"></div>
        <!-- all divs -->
        <div class='row col-lg-off- 1'>
            <!-- about -->
            <div class="mire col-lg-5 col-md-5 hidden-sm" >
                    <span style="
                    font-family: 'Indie Flower', cursive;
                    font-size:20px;"> what can Ninja-links do ?<span> 
                <br><br>
                <ul style="list-style:none;position:relative;    text-indent:20px;">
                <li>save your note</li>
                <li>save your links</li>
                <li>find book and tutorials</li>
                <li> and much more</li>
            </ul>
            <span > sign in using facebook</spna>
            <br><br>
            <br><br>
            <img src="..\..\include\img\prog.png" height=150px style="float:left" alt="">
            </div>
            <!-- form -->
            <div class='col-lg-6 log_in_info' style='padding:20px;'>
                <!-- <span class=''> <img src="..\..\include\img\spectrim.png" style='float:left; dispaly:inline;' height='30px' alt="what?"></span> -->
                <span style="color:black ;
                            font-family: 'Indie Flower', cursive;
                            font-size:30px;">
                            <center>                            <center><img src="..\..\include\img\logo.png" style='float:left; dispaly:inline;' height='80px' alt="what?"></center></span></center></span>
                <div class='fix' ></div>
                <!-- form -->
                <?php include_once "component/signup/form.php" ?> 
                <!-- form -->
                
                <div class="fix"></div>
                <center>
                <span style="color:black;
                font-family: 'Oxygen', sans-serif;">  Already have an account ? <a style="color:#FA5252" href="login.php" class="forget_pass">Log in</a></span>                
                </center>   
                </br>            
                </br>            
                <a href="forgetpassword.php" class="forget_pass" style="color:#FA5252 ;"> Forget Password ? </a>
                
            
            </div>
        </div>
        
    </div>
    
    <div class ="backgro" id='particles-js'></div>    
<?php 
    include_once "component/signup/footer.php" ;
?>