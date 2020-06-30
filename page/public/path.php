<?php 
// تم نقلها للبروفايل الاصلي (ما الها فايده )
    $css_file="logins";
    $page_name="profile";
    include_once "../../include/class/public/inc_path.php";
    if(!islogedin::logedin()){
        $user_id=0;
    }else{
        $user_id=islogedin::logedin();

    }
    if(isset($_GET['user_id'])){
        if($_GET['user_id']==$user_id){
            $same=true;
            $show_links_from=prot::valid($_GET['user_id']);            
        }else{
            $same=false;
            $show_links_from=prot::valid($_GET['user_id']);
        }
    }else{
        header('LOCATION:../index.php');
    }


    if(isset($_POST['save'])){
       if(!empty($_POST['name'])&&!empty($_POST['paths'])){
            $titel=prot::valid($_POST['name']);
            $paths=prot::valid($_POST['paths']);
            $type=prot::valid($_POST['type']);            
            $stmt="SELECT * FROM public_links WHERE user_id=:user_id and dates=:dates ";
            $param=[':user_id'=>$user_id,":dates"=>date("Y/m/d")];
            $query=querys::query($stmt,$param);
            if(!$query){
                $stmt='INSERT INTO public_path(user_id,type,titel,paths,dates) values(:user_id,:type,:titel,:paths,:dates)';
                $param=[':user_id'=>$user_id , ":type"=>$type , ":titel"=>$titel,":paths"=>$paths ,":dates"=>date("Y/m/d")];
                if(querys::query($stmt,$param)){
                    $msg='save ';
    
                }else{
                    $msg='some thing wrong! ';
                }
            }else{

                if($query->rowCount()<20){
                    $stmt='INSERT INTO public_path(user_id,type,titel,paths,dates) values(:user_id,:type,:titel,:paths,:dates)';
                    $param=[':user_id'=>$user_id , ":type"=>$type , ":titel"=>$titel,":paths"=>$paths ,":dates"=>date("Y/m/d")];                    
                    if(querys::query($stmt,$param)){
                        $msg='save ';
        
                    }else{
                        $msg='some thing wrong! ';
                    }
                }else{
                    $msg='you cant share more than 20 links in one day';                
                }
            }         
        }else{
            $msg='empty ?';
        }
    }
       include_once "../../include/part/header/folder_inside_page_header.php";

?>
    <link rel="stylesheet" href="../../include/css/grid.css"> 
    <link rel="stylesheet" href="../../include/css/home.css">
    <script src="../../include/js/ajax.js"></script>
    <script src='../../include/js/functions.js'></script>
    
    </head>
<?php require_once '../../include/part/side_bar.php';?>
<div class=" col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix ">
        <div class="col-lg-4 no_margin_btm">
            <a href="profile.php"><div class="col-lg-4 blue " style="text-align:center"><i class="fa fa-cog fa-lg icon-si" aria-hidden="true"></i></div></a>
            <a href="<?php echo"share_links.php?user_id=".$show_links_from;?>" ><div class="col-lg-4 blue " style="text-align:center"><i class="fa fa-lg  fa-retweet  icon-si" aria-hidden="true"></i> </div></a>
            <div class="col-lg-4 blue active" style="text-align:center"><i class="fa fa-2x fa-map fa-lg icon-si" aria-hidden="true"></i></div>
        </div>
    <div class='fix'></div>
    <?php if ($same): ?>
    <div class="form">  
    <div class='msg' style='font-size:15px'>share us your experience in learning something [the steps ,the book ,etcetera..]</div>

    <form action="<?php echo "path.php?user_id=".$user_id; ?>" method="POST">
                    <input type="text" name="name" id="" autofocus style='font-family:fontawesome' 
                    class="col-sm-5 col-md-8 col-sm-off-1 col-lg-off-1"
                    placeholder="&#xf054|   what you learned">
                    <select class='col-lg-2' name='type'>
                        <option value="programming">programming</option>
                        <option value="power">power</option>
                        <option value="control">control</option>
                        <option value="mechanical">mechanical</option>
                    </select>
                    <textarea rows="15" cols="40" type="text" name="paths" id="" class="col-sm-10 col-sm-off-1  col-md-9 col-lg-off-1"
                    style='font-family:fontawesome' 
                    placeholder="&#xf121 |    how you did it ?"></textarea>
                    <input type="submit" class="col-sm-10 col-sm-off-1 top_btn" value=" &#xf079 |share" style='font-family:fontawesome' 
                    name="save">
                </form>
            <br>
        </div>
        <?php require_once '../../include/class/show_msg.php';?>
        <?php endif; 
        include "../../include/class/public/public_pathes/print_public_path.php";
        ?>



</div>

    
