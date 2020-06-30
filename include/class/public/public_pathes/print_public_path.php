<?php 
if(isset($_GET['user_id'])):
    $stmt='SELECT * FROM public_path WHERE user_id =:user_id';
    $param=[':user_id'=>$show_links_from];
    $public_links=querys::query($stmt,$param);
    if(!empty($public_links)){$public_links=$public_links->fetchAll(PDO::FETCH_ASSOC);
    echo "<div id='publik_link'></div>";
    foreach($public_links as $key =>$value){
        echo "<div class='public_link_blue'>";
       switch ( $public_links[$key]['type']){
           case('programming'):echo '<i class="fa fa-code fa-lg" aria-hidden="true"></i>';
           break;
           case('mechanical'):echo '<i class="fa fa-cog fa-lg" aria-hidden="true"></i>';
           break;
           case('power'):echo '<i class="fa fa-bolt fa-lg" aria-hidden="true"></i>';
           break;
           case('control'):echo '<i class="fa fa-microchip fa-lg" aria-hidden="true"></i>';
           break;
            
        }
        echo "<span style='padding-left:10px;'" 
        ."onclick=this.childNodes[1].style.display='block';
        >".$public_links[$key]['titel'].
        "<span class='search_rs' style='display:none'>".$public_links[$key]['paths']."</span>".
        "</span>";
        if($same){
            echo "<span  onclick= this.parentNode.style.display='none';delete_public_path(".$public_links[$key]['id'].")
            style='float:right'><i class='fa fa-trash-o fa-lg' aria-hidden='true'></i></span>";
        }
        
        
        echo "</div>";
        echo "<br>";
        echo '<div id="d"></div>';
    }
}else{
    echo "no links !";
}
    echo "</div>";
    endif?>