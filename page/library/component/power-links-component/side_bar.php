<?php
$islogin=islogedin::logedin(); 
if($islogin){
            echo '
            <div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1">
            <div class="icons in-smaill"></div>
            <div class="icons hidden-sm" onclick="taggel()"><i class="fa fa-bars fa-3x " aria-hidden="true"></i></div>            
            <a href="../all/all.php"><div class="icons "><i class="fa fa-globe fa-3x" aria-hidden="true"></i></div></a>
            <a href="library.php"><div class="icons active "><i class="fa fa-television fa-3x " aria-hidden="true"></i>    </div></a> 
            <a href="../picked/"><div class="icons "><i class="fa  fa-quote-right fa-3x" aria-hidden="true"></i></div> </a>    
            <a href="../action/logout.php"><div class="icons"><i class="fa fa-power-off fa-3x" aria-hidden="true"></i></div></a>
        
            </div>
            ';
   

}else{

            echo '
            <div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1">
            <div class="icons in-smaill"></div>
            <div class="icons hidden-sm" onclick="taggel()"><i class="fa fa-bars fa-3x " aria-hidden="true"></i></div>
            <a href="../public/about-us.php"><div class="icons "><i class="fa fa-exclamation fa-3x" aria-hidden="true"></i></div></a>
            <a href="library.php"><div class="icons active "><i class="fa fa-television fa-3x " aria-hidden="true"></i>    </div></a> 
            <a href="../picked/"><div class="icons "><i class="fa  fa-quote-right fa-3x" aria-hidden="true"></i></div> </a>    
            <a href="../action/login.php"><div class="icons"><i class="fa fa-sign-in fa-3x" aria-hidden="true"></i></div></a>
            </div>
            ';

}

?>
