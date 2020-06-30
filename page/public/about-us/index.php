<?php  
    include_once "component/header.php";
?>  
<body style='width:100%;'>
<!-- #0C0C0C gray-->
<!-- #39B54A green -->
<!-- start div image with some info -->
    <div  class =" col-sm-12 col-md-12 col-lg-12" style='padding:0px;background-color:rgba(0,0,0,0.8);' >
    <!--start congtant above img  -->
        <div class="absolute col-lg-12" style='color:white;z-index:50;top:100px'>
            <!-- logo lg md-->
            <div class="logo relative pointer visible-lg hidden-sm" style='position:absolute;top:-90px;margin-left:20px;'>
            <img src="../../../include/img/white-logo.png"  height="180" width='180' /> 
            </div>
            <!-- logo lg md-->
            <!-- logo sm -->
               <div class="logo relative pointer visible-sm hidden-lg hidden-md" style='position:absolute;top:-100px;margin-left:10px;'>
            <img src="../../../include/img/white-logo.png"  height="120" width='120' /> 
            </div>
            <!-- logo sm -->

            <!-- side bar -->
                <!-- <div class="side-icon pointer absolute" onclick="document.getElementById('bar').style.display ='block';"style='                                                                       top:-70px;right:40px'> -->
                    <!-- <i class="fa fa-bars fa-2x" aria-hidden="true"></i> -->
                <!-- </div>  -->
                        
                <?php //include_once "component/side.html"; ?>            
            <!-- side bar -->

            <div class="con col-lg-12" style='direction:rtl' >
                <!-- <div  class='col-sm-off-1 col-md-off-1 col-lg-lg-1'></div> -->
                <div class="col-lg-12"></div>
                <div class="col-lg-off-0.5 col-md-off-0.5 col-sm-off-0.5"></div>
         
                <div class='col-lg-off-1 col-md-off-1 col-sm-off-1 col-lg-6 col-lg-6  wrap'style="font-family: 'Montserrat', sans-serif;font-size:25px;">
                    <span style="color:#c1b6b6;font-family: 'El Messiri', sans-serif;" >
                    أهلا بكم !</span><br>
                    <div class="col-lg-12"></div>
                    <span style=" font-family: 'Harmattan', sans-serif; ">
                    هو موقع إلكتروني وتطبيق على الهاتف، متخصص في التعليم
                    والروابط الإلكترونية، يهدف إلى رفع المستوى العلمي والتكنولوجي
                    لطلاب الجامعات، وللراغبين بالتعلم الذاتي من غير الطلاب.
                                        </span>
   
                </div>
            </div>
            <div class="col-lg-12"></div>
            <!-- btn place -->
            <div class='col-lg-off-4 col-lg-8 col-sm-10 col-md-10  relative ' style='top:70px;'>
                <a href='../../action/login.php'><div class="btn-menu col-lg-3 col-sm-12 col-md-6 pointer" style="border:1px white solid;
                                                      font-family: 'Montserrat', sans-serif;
                                                      text-align:center;font-size:20px;
                                                      text-transform: capitalize;
                                                          font-weight: bold;
                                                          margin-right:10px;
">
                                                          log in</div></a>
                <a href='../../action/signup.php'><div class="btn-menu col-md-6 col-sm-12 col-lg-3 pointer "   style="border:1px white solid;                                                   
                        font-family: 'Montserrat', sans-serif;
                        text-align:center;font-size:20px;
                        text-transform: capitalize;
                        font-weight: bold;
                        margin-right:10px;
                        ">join us</div></a>
            </div>
            <!-- btn place -->

        </div>
    <!--end congtant above img  -->
        
        <img class='relative' height="700" width='100%' style ='z-index:-10;top:0px;background-attachment: fixed;'src="../../../include/img/about-us.jpg" width="1366" height="700" alt="">
    </div>
<!-- end div image with some info -->
<!-- ******************************************************************************************** -->
<!-- secound container [Our Services] -->
    <?php include_once 'component/our-services.html'?>
<!-- secound container -->


<!-- our goals -->
    <?php include_once 'component/our-goals.php' ?>
<!-- our goals -->

<!-- our-vesion -->
<?php include_once 'component/our-vesion.php' ?>

<!-- our-vesion -->

<!-- follow us ?  -->
<?php include_once 'component/follow-us.php' ?>
<!-- follow us ?  -->


<!--start footer -->
    <?php include_once 'component/footer.php' ?>
<!--end footer -->
</body>