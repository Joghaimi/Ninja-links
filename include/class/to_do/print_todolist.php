<?php 
$stmt='SELECT * from todo WHERE user_id=:user_id  ORDER BY  id DESC';
$param=[':user_id'=>$user_id];
$query=querys::query($stmt,$param);
if($query){
    $query=$query->fetchAll(PDO::FETCH_ASSOC);
    echo '<ul id="todo">';
    $n=0;
    foreach($query as $key =>$value){
        $n++;
        if($n%2!=0){
            echo "<div class=''><li onclick=check(".$query[$key]['id'].") style ='text-decoration:";
            if($query[$key]['stat']==1){
            echo "line-through;'";            
            }else{
            echo "none;'";
            }
            echo"class='li_li col-lg-10 col-md-10 col-sm-10'>".$query[$key]['todo']."</li>"
            ."<input type='submit' class='col-lg-2 col-md-2 col-sm-2   li-cross_bl' style='cursor:pointer;font-family:fontawesome' 
            id='cross' onclick= this.parentNode.style.display='none';delete_item(".$query[$key]['id'].") value='&#xf00d;'/></div>"
                    
            ;             
        }else{
            echo "<div class=''><li onclick=check(".$query[$key]['id'].") style='text-decoration:";
            if($query[$key]['stat']==1){
                echo "line-through;'";            
                }else{
                echo "none;'";
                }
            echo "class='li_da col-lg-10 col-md-10 col-sm-10'>".$query[$key]['todo']."</li>"
            ."<input type='submit' class='col-lg-2 col-md-2 col-sm-2  li-cross_rd' style='cursor:pointer;font-family:fontawesome' 
            id='cross' onclick= this.parentNode.style.display='none';delete_item(".$query[$key]['id'].") value='&#xf00d;'/></div>";
        }

    }
    echo "</ul>";
}