<?php
if($page_name=="home"){
    echo "<form action='' method='post' onsubmit='return false;'>
    <input type='text' name='search' class='search'style='font-family:fontawesome' placeholder='&#xf002; Search..'
     onkeypress=searchs(this)> 
    </form>
    <div id='for_searchs' class='col-sm-9 col-md-9 col-lg-8  fix'>
        <span  style='cursor:pointer;font-family:fontawesome' class='cross' id='cross' onclick= document.getElementById('cross').parentNode.style.display='none'; >&#xf00d;   </span>
        <span> search result : </span>
        <div id='for_search'>
    
        </div>
    </div>";
}else{
    echo "<form action='' method='post' onsubmit='return false;'>
    <input type='text' name='search' class='search'style='font-family:fontawesome' placeholder='&#xf002; Search..' onkeypress=searchs_post(this)> 
    </form>
    <div id='for_searchs' class='col-sm-9 col-md-9 col-lg-8  fix'>
        <span  style='cursor:pointer;font-family:fontawesome' class='cross' id='cross' onclick= document.getElementById('cross').parentNode.style.display='none'; >&#xf00d;   </span>
        <span> search result : </span>
        <div id='for_search'>
    
        </div>
    </div>";
}
// <span  style='cursor:pointer;font-family:fontawesome' class='cross' onclick='this.parentNode.parentNode.removeChild(this.parentNode); return false;' >&#xf00d;   </span>

?>
