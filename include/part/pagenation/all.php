<?php 
    if($pg_name=="todo"){
        echo '
        <div class="col-lg-4 no_margin_btm">
            <div class="col-lg-3 blue active" style="text-align:center;padding-bottom: 25px;padding-top: 20px;"><i class="fa fa-check-square-o fa-lg icon-si" aria-hidden="true"></i></div>
            <a href="../../index.php"><div class="col-lg-3 blue " style="text-align:center"><i class="fa fa-link  fa-retweet  icon-si" aria-hidden="true"></i> </div></a>   
            <a  href="memories.php"><div class="col-lg-3 blue" style="text-align:center"><i class="fa fa-pencil-square-o fa-lg icon-si" aria-hidden="true"></i></div></a>
         
            <a  href="settings.php">
            <div class="col-lg-3 blue" style="text-align:center">
            <i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i>
            </div></a>

            </div>
         <div class="fix"></div>';
        
    }else if($pg_name=="links"){
   

    }else if($pg_name=="memories"){
        echo '
        <div class="col-lg-4 no_margin_btm">
        <a href="todo.php"><div class="col-lg-3 blue " style="text-align:center"><i class="fa fa-check-square-o fa-lg icon-si" aria-hidden="true"></i></div></a>
        <a  href="../../index.php"><div class="col-lg-3 blue " style="text-align:center"><i class="fa fa-link  fa-retweet  icon-si" aria-hidden="true"></i> </div></a>
            <div class="col-lg-3 blue active" style="text-align:center;padding-bottom: 25px;padding-top: 20px;"><i class="fa fa-pencil-square-o  fa-lg icon-si" aria-hidden="true"></i></div>
            <a  href="settings.php">
            <div class="col-lg-3 blue" style="text-align:center">
            <i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i>
            </div></a>
            </div>

       
         <div class="fix"></div>';

    }else if($pg_name=="links"){
        echo '
        <div class="col-lg-4 no_margin_btm">
        <a href="page/all/todo.php"><div class="col-lg-3 blue " style="text-align:center">
        <i class="fa  fa-check-square-o fa-lg  icon-si" aria-hidden="true"></i>
        </div>
        </a>
            <div class="col-lg-3 blue active" style=" text-align:center;padding-bottom: 25px;padding-top: 20px;">
            <i class="fa fa-link  fa-retweet fa-lg  icon-si" aria-hidden="true"></i> 
            </div>
            <a  href="page/all/memories.php">
            <div class="col-lg-3 blue" style="text-align:center">
            <i class="fa fa-pencil-square-o fa-lg icon-si" aria-hidden="true"></i>
            </div></a>

            <a  href="page/all/settings.php">
            <div class="col-lg-3 blue" style="text-align:center">
            <i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i>
            </div></a>

         </div>
         <div class="fix"></div>';

    }else if($pg_name=="settings"){
        echo '
        <div class="col-lg-4 no_margin_btm">
        <a href="todo.php"><div class="col-lg-3 blue " style="text-align:center"><i class="fa fa-check-square-o fa-lg icon-si" aria-hidden="true"></i></div></a>
        <a  href="../../index.php"><div class="col-lg-3 blue " style="text-align:center"><i class="fa fa-link  fa-retweet  icon-si" aria-hidden="true"></i> </div></a>
           
            <a  href="memories.php">
            <div class="col-lg-3 blue" style="text-align:center">
            <i class="fa  fa-lg fa-pencil-square-o icon-si" aria-hidden="true"></i>
            </div></a>
            <div class="col-lg-3 blue active" style="text-align:center;padding-bottom: 25px;padding-top: 20px;"><i class="fa f fa-lg icon-si fa-cog" aria-hidden="true"></i></div> 
            </div>
           

       
         <div class="fix"></div>';

    }