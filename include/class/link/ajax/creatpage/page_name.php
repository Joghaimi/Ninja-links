<?php 
require_once '../../../db.php';
require_once '../../../islogedin.php';
require_once '../../../securety.php';
require_once '../../../query.php';

/*-------------------------------page name------------------------*/ 
if(isset($_POST['info'])){
    // secure the input 
   $page_name= prot::valid($_POST['info']);
   $stmt="SELECT * FROM page where  page_name=:page_name";
   $param=[':page_name'=>$page_name];
   if(querys::query($stmt,$param)){
       echo "try an other name";
   }else{
        echo "cool name";
   }
}
?>
  