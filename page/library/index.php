<?php

    include_once "component/global/include-global-classes.php"; #include classes like securety , db , islogedin query
    include_once  "component/index/function.php"; #for the style
    include_once  "component/index/variable.php"; #for the style
    include_once "component/index/header.php"; #header
    include_once "component/index/side_bar.php"; #side bar
    
?>
<div class="capitalize col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix all ">
   
   <a href="power.php" class='icons col-sm-12 col-md-12 col-lg-12 a-rd'>
        <div class=" "><i class="fa   fa-bolt fa-3x" aria-hidden="true"></i>  
           <span class='all_span'>Power</span>     
       </div>
   </a>
 
   <a href="control.php" class='icons col-sm-12 col-md-12 col-lg-12 a-rd'>
       <div class=" "><i class="fa fa-microchip  fa-3x" aria-hidden="true"></i>  
           <span class='all_span'>control</span>     
       </div>
   </a> 

   <a href="programming.php" class='icons col-sm-12 col-md-12 col-lg-12 a-rd'>
       <div class=" ">
           <i class="fa fa-code fa-3x" aria-hidden="true"></i>  
           <span class='all_span'>programming</span>     
       </div>
   </a> 
   <a href="mech.php" class='icons col-sm-12 col-md-12 col-lg-12 a-rd'>
       <div class=" ">
           <i class="fa fa-cog fa-3x" aria-hidden="true"></i>  
           <span class='all_span'>mechanical</span>     
       </div>
   </a> 

</div>    

<?php include_once "component/index/footer.php";
