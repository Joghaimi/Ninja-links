<?php

    require_once "../../include/class/all/inc_path.php";
    require_once '../../include/class/to_do/additem.php';
    include_once "component/todo/variable.php";    
    include_once "component/todo/function.php";
    include_once "component/todo/header.php";
    include_once "component/todo/side_bar.html";
    
    ?>

    <div class=" col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix ">
    <?php include_once "component/todo/pagenation.html"?>

    <div class=" col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix ">

            <div class="form">
                <form action="todo.php" method="POST">
                    <input type="text" name="todo" id="" class="col-sm-10 col-sm-off-1  col-md-9 col-lg-off-1" style='font-family:fontawesome' placeholder="&#xf274 |    ToDo">
                    <input type="submit" class="col-sm-10 col-sm-off-1 top_btn def-cl" value="&#xf02e |save" style='font-family:fontawesome' name="save">
                </form>
                <br>
            </div> 
            <?php 
                require_once '../../include/class/show_msg.php';
                echo "<br>";
                require_once '../../include/class/to_do/print_todolist.php';
                
            ?>
        </div>
    </div>
<?php include_once "component/todo/footer.php";