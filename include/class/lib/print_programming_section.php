<?php
    $stmt='SELECT * FROM programming_sec WHERE 1';
    $param=[];
    $querys=querys::query($stmt,$param);
    if($querys){
        $querys=$querys->fetchAll(PDO::FETCH_ASSOC);
        $i=1;
       foreach($querys as $key =>$val){
        $i++;
        if($i%2==0){
             echo "<a href='programming_links.php?power_id=".$querys[$key]['id']."'><div class='post-blue post-sec'>";
        }else{
             echo "<a href='programming_links.php?power_id=".$querys[$key]['id']."'><div class='post-red post-sec'>";            
        }
        echo "<div class='titel'><span  style='font-family:fontawesome' class='titel-icon' >&#xf054 |   </span>".$querys[$key]['name']."</div>";
        echo "<div class='body' >".$querys[$key]['about']."</div><br>";

        echo "</div></a> <br>";
            
    } 
}else{
        $msg= 'no section until ';
    }