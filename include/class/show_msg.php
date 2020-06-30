<?php
if(!empty($msg)){
    
       echo ' <div class="danger msg-float ">';
       echo "<p> $msg .";
       echo "<span style='float:right;cursor: pointer;color:#242424;font-size:20px' onclick=this.parentElement.parentElement.style.display='none';>&times;</span></p>";
       echo "</div><br>";     
     
    }
      