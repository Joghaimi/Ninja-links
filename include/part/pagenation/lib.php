<?php 
    if($pg_name=="power"){
        echo '
        <div class="col-lg-4 visible-lg  hidden-md hidden-sm no_margin_btm">
        
            <div class="col-lg-3 blue active" style="text-align:center;padding-bottom: 25px;padding-top: 20px;"><i class="fa fa-bolt fa-lg icon-si" aria-hidden="true"></i></div>
            <a href="control.php"><div class="col-lg-3 blue " style="text-align:center"><i class="fa fa-microchip    icon-si" aria-hidden="true"></i> </div></a>   
            <a  href="programming.php"><div class="col-lg-3 blue" style="text-align:center"><i class="fa fa-code icon-si" aria-hidden="true"></i></div></a>
            <a  href="mech.php"><div class="col-lg-3 blue" style="text-align:center"><i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i></div></a>
            
        </div>
        <div class="fix"></div>';
        echo '
        <div class="col-lg-8 col-sm-12 hidden-lg no_margin_btm" style="padding:0px;">
        
            <div class="col-lg-3  blue active" style="text-align:center;padding:5px"><i class="fa fa-bolt fa-lg icon-si" aria-hidden="true"></i></div>
            <a href="control.php"><div class="col-lg-3 blue " style="text-align:center;padding:5px  "><i class="fa fa-microchip  fa-retweet  icon-si" aria-hidden="true"></i> </div></a>   
            <a  href="programming.php"><div class="col-lg-3 blue" style="text-align:center;padding:5px"><i class="fa fa-code icon-si" aria-hidden="true"></i></div></a>
            <a  href="mech.php"><div class="col-lg-3 blue" style="text-align:center;padding:5px"><i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i></div></a>
            
        </div>
        <div class="fix"></div>';
    }else if($pg_name=="control"){
        echo '
        <div class="col-lg-4 visible-lg  hidden-md hidden-sm no_margin_btm ">
        
            <a href="power.php"><div class="col-lg-3 blue "><i class="fa fa-bolt fa-lg icon-si" aria-hidden="true"></i></div></a>
            <div class="col-lg-3 blue active" style="text-align:center;padding-bottom: 25px;padding-top: 20px;"><i class="fa fa-microchip  fa-retweet  icon-si" aria-hidden="true"></i> </div>
            <a  href="programming.php"><div class="col-lg-3 blue" style="text-align:center"><i class="fa fa-code icon-si" aria-hidden="true"></i></div></a>
            <a  href="mech.php"><div class="col-lg-3 blue" style="text-align:center"><i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i></div></a>
            
        </div>
        <div class="fix"></div>';
        echo '
        <div class="col-lg-8 col-sm-12 hidden-lg no_margin_btm " style="padding:0px;">
        
        <a href="power.php"><div class="col-lg-3 blue "style="text-align:center;padding:5px"><i class="fa fa-bolt fa-lg icon-si" aria-hidden="true"></i></div></a>
        <div class="col-lg-3 blue active" style="text-align:center;padding:5px"><i class="fa fa-microchip  fa-retweet  icon-si" aria-hidden="true"></i> </div>
        <a  href="programming.php"><div class="col-lg-3 blue" style="text-align:center;padding:5px"><i class="fa fa-code icon-si" aria-hidden="true"></i></div></a>
        <a  href="mech.php"><div class="col-lg-3 blue" style="text-align:center;padding:5px"><i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i></div></a>
        </div>
        <div class="fix"></div>';
    }else if($pg_name=="programming"){
        echo '
        <div class="col-lg-4 visible-lg  hidden-md hidden-sm   ">
        
            <a href="power.php"><div class="col-lg-3 blue "><i class="fa fa-bolt fa-lg icon-si" aria-hidden="true"></i></div></a>
            <a  href="control.php"><div class="col-lg-3 blue " style="text-align:center;" "><i class="fa fa-microchip  fa-retweet  icon-si" aria-hidden="true"></i> </div></a>
            <div class="col-lg-3 blue active" style="text-align:center;padding-bottom: 25px;padding-top: 20px;"><i class="fa fa-code icon-si" aria-hidden="true"></i></div>
            <a  href="mech.php"><div class="col-lg-3 blue" style="text-align:center"><i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i></div></a>
            
        </div>
        <div class="fix"></div>';
        echo '
        <div class="col-lg-8 col-sm-12 hidden-lg hidden-lg no_margin_btm" style="padding:0px;">
        <a href="power.php"><div class="col-lg-3 blue "style="text-align:center;padding:5px"><i class="fa fa-bolt fa-lg icon-si" aria-hidden="true"></i></div></a>
        <a  href="control.php"><div class="col-lg-3 blue " style="text-align:center;padding:5px" "><i class="fa fa-microchip  fa-retweet  icon-si" aria-hidden="true"></i> </div></a>
        <div class="col-lg-3 blue active" style="text-align:center;padding:5px"><i class="fa fa-code icon-si" aria-hidden="true"></i></div>
        <a  href="mech.php"><div class="col-lg-3 blue" style="text-align:center;padding:5px"><i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i></div></a>
        </div>
        <div class="fix"></div>';

    }else if ($pg_name=="mich"){
        echo '
        <div class="col-lg-4 visible-lg  hidden-md hidden-sm ">
        
            <a href="power.php"><div class="col-lg-3 blue "><i class="fa fa-bolt fa-lg icon-si" aria-hidden="true"></i></div></a>
            <a  href="control.php"><div class="col-lg-3 blue " style="text-align:center;" "><i class="fa fa-microchip  fa-retweet  icon-si" aria-hidden="true"></i> </div></a>
            <a  href="programming.php"><div class="col-lg-3 blue " style="text-align:center;"><i class="fa fa-code icon-si" aria-hidden="true"></i></div></a>
            <div class="col-lg-3 blue active" style="text-align:center padding-bottom: 25px;padding-top: 20px;"><i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i></div>
            
        </div>
        <div class="fix"></div>
        ';
        echo '
        <div class="col-lg-8 col-sm-12 hidden-lg no_margin_btm" style="padding:0px;">
        <a href="power.php"><div class="col-lg-3 blue " style="text-align:center;padding:5px"><i class="fa fa-bolt fa-lg icon-si" aria-hidden="true"></i></div></a>
        <a  href="control.php"><div class="col-lg-3 blue " style="text-align:center;padding:5px"><i class="fa fa-microchip  fa-retweet  icon-si" aria-hidden="true"></i> </div></a>
        <a  href="programming.php"><div class="col-lg-3 blue " style="text-align:center;padding:5px"><i class="fa fa-code icon-si" aria-hidden="true"></i></div></a>
        <div class="col-lg-3 blue active" style="text-align:center;padding:5px"><i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i></div>
        </div>
        <div class="fix"></div>';
    }