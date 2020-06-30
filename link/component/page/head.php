<div class="col-sm-12 background-dark">
   
   
     <!-- logo  and name -->

         <div class='col-sm-4 font-titel font-white capitalize zero-padding text-center' style="font-size:25px; "><?php echo $page_name; ?></div>
         <div class='col-sm-4'>ahmad said</div>
         <div class='col-sm-4'>         
            <div class="side-icon pointer absolute" onclick="document.getElementById('bar').style.display ='block';"style='                                                                       top:-70px;right:40px'>
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
            </div> 
        </div>
     <!-- logo  and name -->
    <!-- inside sid par  -->

    <!-- inside sid par  -->
<!--SERACH  -->

        <form action='' method='post' onsubmit='return false;'>
        <input type='text' name='search' class='search' style='font-family:fontawesome' placeholder='&#xf002; Search..'
            onkeypress=searchs(this)> 
        </form>
        <div id='for_searchs' class='col-sm-9 col-md-9 col-lg-8  fix'>
            <span  style='cursor:pointer;font-family:fontawesome' class='cross' id='cross' onclick= document.getElementById('cross').parentNode.style.display='none'; >&#xf00d;   </span>
            <span> search result : </span>
            <div id='for_search'>

            </div>
        </div> 
<!--SERACH  -->
</div>
<?php include_once "component/page/side.php"?> 
