<?php 
    $css_file="logins";
    $page_name="profile";
    include_once "../../include/class/public/inc_path.php";
    if(!islogedin::logedin()){
        $user_id=0;
    }else{
        $user_id=islogedin::logedin();   
   
    }
    if(isset($_GET['user_id'])&&isset($_GET['section_id'])){
        if($_GET['user_id']==$user_id){
            $same=true;
            $show_links_from=prot::valid($_GET['user_id']);
            $section_id=prot::valid($_GET['section_id']);
        }else{
            $same=false;
            $show_links_from=prot::valid($_GET['user_id']);
            $section_id=prot::valid($_GET['section_id']);
            
        }
    }else{
        header('LOCATION:../../index.php');
    }


    if(isset($_POST['save'])){
       if(!empty($_POST['name'])&&!empty($_POST['url'])){

            $titel=prot::valid($_POST['name']);
            $url=prot::valid($_POST['url']);
            $type=prot::valid($_POST['type']);            
            
            $stmt="SELECT * FROM public_links WHERE user_id=:user_id and dates=:dates and section_id=:section_id ";
            $param=[':user_id'=>$user_id,":dates"=>date("Y/m/d"),':section_id'=>$section_id];
            $query=querys::query($stmt,$param);
            if(!$query){
                $stmt='INSERT INTO public_links(user_id,section_id,titel,type,links,dates) values(:user_id,:section_id,:titel,:type,:links,:dates)';
                $param=[':user_id'=>$user_id ,":section_id"=>$section_id, ":titel"=>$titel, ":type"=>$type ,":links"=>$url ,":dates"=>date("Y/m/d")];
                if(querys::query($stmt,$param)){
                    $msg='save ';
    
                }else{
                    $msg='some thing wrong! ';
                }
            }else{

                if($query->rowCount()<20){
                    $stmt='INSERT INTO public_links(user_id,section_id,titel,type,links,dates) values(:user_id,:section_id,:titel,:type,:links,:dates)';
                    $param=[':user_id'=>$user_id ,":section_id"=>$section_id, ":titel"=>$titel, ":type"=>$type ,":links"=>$url ,":dates"=>date("Y/m/d")];
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
    <div class='fix'></div>
    <?php if ($same): ?>
    <div class="form">  
        <div class='msg' style='font-size:20px'>share links for public</div>
            <form action="<?php echo "share_links.php?user_id=".$user_id."&&section_id=".$section_id; ?>" method="POST">
                    <input type="text" name="name" id="" autofocus style='font-family:fontawesome' 
                    class="col-sm-5 col-md-8 col-sm-off-1 col-lg-off-1"
                    placeholder="&#xf054|   title">
                    <select class='col-lg-2' name='type'>
                        <option value="programming">programming</option>
                        <option value="power">power</option>
                        <option value="control">control</option>
                        <option value="mechanical">mechanical</option>
                    </select>
                    <input type="text" name="url" id="" class="col-sm-10 col-sm-off-1  col-md-9 col-lg-off-1" style='font-family:fontawesome' 
                    placeholder="&#xf121 |    url">
                    <input type="submit" class="col-sm-10 col-sm-off-1 top_btn" value=" &#xf079 |share" style='font-family:fontawesome' 
                    name="save">
                </form>
            <br>
        </div>
        <?php require_once '../../include/class/show_msg.php';
        endif; 
        include "../../include/class/public/print_public_link.php";
        ?>
    </div>

    
