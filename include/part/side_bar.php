<?php
$islogin=islogedin::logedin(); 
if($islogin){
    if($page_name=='home'){
        echo '<div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1 ">
            <div class="icons" onclick="taggel()" >
                <i class="fa fa-bars fa-3x" aria-hidden="true"></i> 
            </div>
            <div class="icons  active" onclick="show_main()">
            <i class="fa fa-globe fa-3x" aria-hidden="true"></i>
            </div>
            ';
                
            
           echo' <a href="page/library/library.php">
                <div class="icons ">
                    <i class="fa fa-television fa-3x " aria-hidden="true"></i>    
                </div>
            </a>          
            <a href="">
                <div class="icons">
                    <i class="fa  fa fa-graduation-cap fa-3x" aria-hidden="true"></i>
                </div>
            </a>
            <a href="page/action/logout.php">
                <div class="icons">
                    <i class="fa fa-power-off fa-3x" aria-hidden="true"></i>
                </div>
            </a>
        
        </div>  
        ';
        }elseif($page_name=='all'||$page_name=='memories'||$page_name=='profile'){
            echo '<div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1" >
            
            <div class="icons in-smaill"></div>
            <div class="icons hidden-sm" onclick="taggel()"><i class="fa fa-bars fa-3x " aria-hidden="true"></i> </div>
            ';
           
            echo '
            <div class="icons  active" onclick="show_main();alert()"><i class="fa fa-globe fa-3x" aria-hidden="true"></i></div>
            
            <div id="show_main"  style="overflow:hidden;text-overflow: ellipsis;height:0px;">
                
                <a href="page/all/profile.php"><div class="icons " style="border-left:solid #CC1122 5px;">
                    <i class="fa fa-home " aria-hidden="true"></i>
                </div></a>

                <a href="page/all/todo.php"><div class="icons  " style="border-left:solid #CC1122 5px;">
                    <i class="fa fa-check-square-o " aria-hidden="true"></i>
                </div></a>
                <div class="icons  active" style="border-left:solid #CC1122 5px;">
                    <i class="fa fa-link " aria-hidden="true"></i>
                </div>
                <a href="page/all/memories.php"><div class="icons"style="border-left:solid #CC1122 5px;" >
                    <i class="fa fa-pencil-square-o " aria-hidden="true"></i>
                </div></a>
          
            </div>';
        
        echo    '      
            <a href="library.php"><div class="icons "><i class="fa fa-television fa-3x " aria-hidden="true"></i>    </div></a> 
            <a href="main_page.php"><div class="icons "><i class="fa  fa-quote-right fa-3x" aria-hidden="true"></i></div></a>    
            <a href="logout.php"><div class="icons"><i class="fa fa-power-off fa-3x" aria-hidden="true"></i></div></a>
            
            </div>
            ';
        }elseif($page_name=='lib'){
            echo '
            <div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1">
            <div class="icons in-smaill"></div>
            <div class="icons hidden-sm" onclick="taggel()"><i class="fa fa-bars fa-3x " aria-hidden="true"></i></div>
            
         
            <a href="all.php"><div class="icons "><i class="fa fa-globe fa-3x" aria-hidden="true"></i></div></a>
            <a href="library.php"><div class="icons active "><i class="fa fa-television fa-3x " aria-hidden="true"></i>    </div></a> 
            <a href="main_page.php"><div class="icons "><i class="fa  fa-quote-right fa-3x" aria-hidden="true"></i></div> </a>    
            <a href="logout.php"><div class="icons"><i class="fa fa-power-off fa-3x" aria-hidden="true"></i></div></a>
        
            </div>
            ';
        // newwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
        }elseif($page_name=='main'){
           
            echo '<div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1">
           <div class="icons "></div>
            <div class="icons  hidden-sm" onclick="taggel()"><i class="fa fa-bars fa-3x " aria-hidden="true"></i></div>
           
            <a  href="all.php"><div class="icons"><i class="fa fa-globe fa-3x" aria-hidden="true"></i></div></a>
            <a href="library.php"><div class="icons "><i class="fa fa-television fa-3x " aria-hidden="true"></i></div></a> 
            <a href="main_page.php"><div class="icons active"><i class="fa  fa-quote-right fa-3x" aria-hidden="true"></i></div> </a>    
            <a href="logout.php"><div class="icons"><i class="fa fa-power-off fa-3x" aria-hidden="true"></i></div></a>
            
        </div>';
        }else{
               
            echo '<div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1">
            <div class="icons active"></div>
             <div class="icons  hidden-sm" onclick="taggel()"><i class="fa fa-bars fa-3x " aria-hidden="true"></i></div>
            
             <a  href="..\all\all.php"><div class="icons"><i class="fa fa-globe fa-3x" aria-hidden="true"></i></div></a>
             <a href="page/library/library.php"><div class="icons "><i class="fa fa-television fa-3x " aria-hidden="true"></i></div></a> 
             <a href="main_page.php"><div class="icons "><i class="fa  fa-quote-right fa-3x" aria-hidden="true"></i></div> </a>    
             <a href="../action/logout.php"><div class="icons"><i class="fa fa-power-off fa-3x" aria-hidden="true"></i></div></a>
             
         </div>';
        }
}else{
    if($page_name=='home'){
        echo '<div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1 ">
            <div class="icons" onclick="taggel()" >
                <i class="fa fa-bars fa-3x" aria-hidden="true"></i> 
            </div>
            <a  href="page/all.php">
                <div class="icons  active">
                    <i class="fa fa-globe fa-3x" aria-hidden="true"></i>
                </div>
            </a>
            <a href="page/library.php">
                <div class="icons ">
                    <i class="fa fa-television fa-3x " aria-hidden="true"></i>    
                </div>
            </a>          
            <a href="page/main_page.php">
                <div class="icons">
                    <i class="fa  fa-quote-right fa-3x" aria-hidden="true"></i>
                </div>
            </a>
            <a href="page/login.php">
                <div class="icons">
                    <i class="fa fa-sign-in fa-3x" aria-hidden="true"></i>
                </div>
            </a>
        
        </div>  
        ';
        }elseif($page_name=='all'||$page_name=='memories'||$page_name=='profile'){
            echo '<div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1">
            
                <div class="icons in-smaill"></div>
                <div class="icons hidden-sm" onclick="taggel()"><i class="fa fa-bars fa-3x " aria-hidden="true"></i> </div>
            <a href="all.php"><div class="icons active"><i class="fa fa-globe fa-3x" aria-hidden="true"></i></div></a>
            <a href="library.php"><div class="icons "><i class="fa fa-television fa-3x " aria-hidden="true"></i>    </div></a> 
            <a href="main_page.php"><div class="icons "><i class="fa  fa-quote-right fa-3x" aria-hidden="true"></i></div></a>    
            <a href="login.php"><div class="icons"><i class="fa fa-sign-in fa-3x" aria-hidden="true"></i></div></a>
            
            </div>
            ';
        }elseif($page_name=='lib'){
            echo '
            <div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1">
            <div class="icons in-smaill"></div>
            <div class="icons hidden-sm" onclick="taggel()"><i class="fa fa-bars fa-3x " aria-hidden="true"></i></div>
            
         
            <a href="all.php"><div class="icons "><i class="fa fa-globe fa-3x" aria-hidden="true"></i></div></a>
            <a href="library.php"><div class="icons active "><i class="fa fa-television fa-3x " aria-hidden="true"></i>    </div></a> 
            <a href="main_page.php"><div class="icons "><i class="fa  fa-quote-right fa-3x" aria-hidden="true"></i></div> </a>    
            <a href="login.php"><div class="icons"><i class="fa fa-sign-in fa-3x" aria-hidden="true"></i></div></a>
        
            </div>
            ';
        }elseif($page_name=='main'){
           
            echo '<div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1">
           <div class="icons "></div>
            <div class="icons  hidden-sm" onclick="taggel()"><i class="fa fa-bars fa-3x " aria-hidden="true"></i></div>
           
            <a  href="all.php"><div class="icons"><i class="fa fa-globe fa-3x" aria-hidden="true"></i></div></a>
            <a href="library.php"><div class="icons "><i class="fa fa-television fa-3x " aria-hidden="true"></i></div></a> 
            <a href="main_page.php"><div class="icons active"><i class="fa  fa-quote-right fa-3x" aria-hidden="true"></i></div> </a>    
            <a href="login.php"><div class="icons"><i class="fa fa-sign-in fa-3x" aria-hidden="true"></i></div></a>
            
        </div>';
        }else{
               
            echo '<div id ="right-list" class ="right-list col-sm-2 col-md-2 col-lg-1">
            <div class="icons active"></div>
             <div class="icons  hidden-sm" onclick="taggel()"><i class="fa fa-bars fa-3x " aria-hidden="true"></i></div>
            
             <a  href="all.php"><div class="icons"><i class="fa fa-globe fa-3x" aria-hidden="true"></i></div></a>
             <a href="page/library.php"><div class="icons "><i class="fa fa-television fa-3x " aria-hidden="true"></i></div></a> 
             <a href="main_page.php"><div class="icons "><i class="fa  fa-quote-right fa-3x" aria-hidden="true"></i></div> </a>    
             <a href="login.php"><div class="icons"><i class="fa fa-sign-in fa-3x" aria-hidden="true"></i></div></a>
             
         </div>';
        }

}

?>
