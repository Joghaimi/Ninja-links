<?php 
   
   function print_links($user_id , $loged ,$table_name , $section_id , $type , $isadmin){
        $stmt="SELECT * FROM $table_name WHERE id=:sec_id and types=:types ";//TYPE LIKE BOOK VEDIO act
        $param=[':sec_id'=>$section_id,':types'=>$type];
        $query=querys::query($stmt,$param);
        if($query){
            $query=$query->fetchAll(PDO::FETCH_ASSOC);
            $i=0;
            // print links
            echo "<div id='material'>";
            foreach($query as $key => $val ){
                $i++;
                if($i%2==0){
                    echo "<div class=' li_li margin_btm'>";
                }else{
                    echo "<div class='li_da margin_btm'>";            
                }
                echo "<a class='black' target='_blink' href='".$query[$key]['link']."'>".$query[$key]['name']."</a>";
                // link delete
                if($isadmin){
                    echo '<input type="checkbox" name="delet_id" value='.$query[$key]['ids'].' form="links" id="" >';
                    echo'<input type=submit value=delete name=delete form="links">';
                }
                echo "<span style='font-size:10px;float:right;color:red;padding-left:5px;'>likes:".$query[$key]['liked']."</span>";
                // like link 
                if($loged){
                    switch($table_name){
                        case 'power_sec_link':$table_number=1;break;
                        case 'control_sec_link':$table_number=2;break;
                        case 'programming_sec_link':$table_number=3;break;
                        case 'mech_sec_link':$table_number=4;break;
                    }
                    echo '   <i class="fa fa-heart-o fa-2x " id="na'.$query[$key]['ids'].'"style="float:right;color:black" aria-hidden="true"
                    onclick=this.style.color="red";links_rate('.$query[$key]['ids'].','.$table_number.','.$section_id.')></i>';
                    
                }
                echo "</div> ";
            }
            echo "</div>";
     }
    }