<?php 
include_once 'inc_path.php'; 

if(isset($_POST['info'])){
        $info=explode(',',$_POST['info']);
        $user_id=prot::valid($info[0]);
        $section=prot::valid($info[1]);
        
        $stmt='SELECT * FROM public_links WHERE user_id =:user_id and section_id=:section_id';
        $param=[':user_id'=> $user_id,":section_id"=>$section];
        $public_links=querys::query($stmt,$param);
        if(!empty($public_links)){
            $public_links=$public_links->fetchAll(PDO::FETCH_ASSOC);
            echo "<div id='publik_link'></div>";
            foreach($public_links as $key =>$value){
                echo "<div class='public_link_blue' style='margin-top:10px;'>";
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
            echo"<a href=".$public_links[$key]['links']." target='_blank'><span style='color:black ;padding-left:10px;font-size:20px'>". $public_links[$key]['titel']."</span></a>";        
    
            echo "</div>";
            echo "<br>";
            }
        }else{
            echo "no links !";
        }
        echo "</div>";
    }
?>

</div>