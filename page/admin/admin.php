<?php
require_once ('../../include/class/db.php');
require_once ('../../include/class/query.php');
require_once ('../../include/class/islogedin.php');
require_once ('../../include/class/securety.php');
$user_id=islogedin::logedin();
$stmt='SELECT * FROM admin where id=:user_id';
$param=[':user_id'=>$user_id];
if(!querys::query($stmt,$param)){
    header('LOCATION:../../index.php');
}
/**addd admin */
if(isset($_POST['add'])){///NOT WORK YET 
    if(!empty($_POST['email'])&&!empty($_POST['password'])){
        $email=prot::valid($_POST['email']);
        $pass=prot::valid($_POST['password']);
        $stmt='SELECT * FROM users WHERE password=:password and email=:email';
        $param=[':password'=>md5($pass),':email'=>$email];
        
        if(querys::query($stmt,$param)){
        $stmt='SELECT id FROM users WHERE email=:email';
        $param=[':email'=>$email];
        $ids=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC)[0];
        $id= $ids['id'];
        $stmt='SELECT * FROM admin WHERE id=:user_id';
        $param=[':user_id'=>$id];
        
        if(querys::query($stmt,$param)){
            $msg='he already admin !';
          
            
        }else{
            $stmt="INSERT INTO admin (id,name)values(:id,:name)";
            $param=['id'=>$id,':name'=>$email];
            if(querys::query($stmt,$param)){
                $msg='done ^__^ !';}
                else{
                    $msg='some thing wrongs';
                }
        }
        
    }else{
        $msg='wrong password or email';
    }
    }else{
        $msg='empty feild ? ';
    }

}
/************************************new */
//super user
if(isset($_POST['add_super'])){///NOT WORK YET 
    if(!empty($_POST['email'])&&!empty($_POST['password'])){
        $email=prot::valid($_POST['email']);
        $pass=prot::valid($_POST['password']);
        $stmt='SELECT * FROM users WHERE password=:password and email=:email';
        $param=[':password'=>md5($pass),':email'=>$email];
        
        if(querys::query($stmt,$param)){
        $stmt='SELECT id FROM users WHERE email=:email';
        $param=[':email'=>$email];
        $ids=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC)[0];
        $id= $ids['id'];
        $stmt='SELECT * FROM suber_user WHERE user_id =:user_id';
        $param=[':user_id'=>$id];
        
        if(querys::query($stmt,$param)){
            $msg='he already admin !';
          
            
        }else{
            $stmt="INSERT INTO suber_user (user_id,name)values(:id,:name)";
            $param=['id'=>$id,':name'=>$email];
            if(querys::query($stmt,$param)){
                $msg='done ^__^ !';}
                else{
                    $msg='some thing wrongs';
                }
        }
        
    }else{
        $msg='wrong password or email';
    }
    }else{
        $msg='empty feild ? ';
    }

}
/************************************new */

//**active devices  */
$stmt='SELECT user_id FROM token';
$param=[];
$active_devices=querys::query($stmt,$param)->rowCount();
$css_file="home";
$page_name='admin';
/** regrseted useres*/
$stmt='SELECT id FROM users';
$param=[];
$regrested_users=querys::query($stmt,$param)->rowCount();
include_once "../../include/part/header/folder_inside_page_header.php";
?>
</head>
<body>
    <?php  require_once '../../include/part/side_bar.php'?>
 <!-- users info -->

    <div class=" col-sm-10 col-md-10 col-lg-8 col-sm-off-2 col-md-off-2 col-lg-off-2 fix ">

    <?php require_once '../../include/class/show_msg.php';?>

        <div class="main_info ">
              <div class ="info info-red info-bl col-sm-off-1 col-md-off-1 col-lg-off-1"><i class="fa fa-user fa-lg icon-si" aria-hidden="true"></i> 
              active devices : <?php echo $active_devices;?></div>
              <div class ="info info-blue info-bl col-sm-off-1 col-md-off-1 col-lg-off-1"><i class="fa fa-users fa-lg icon-si" aria-hidden="true"></i> 
             regrested users : <?php echo $regrested_users;?> </div>
             <a href='show_masege_admin.php'><div class ="info info-red info-bl col-sm-off-1 col-md-off-1 col-lg-off-1"><i class="fa fa-commenting fa-lg icon-si" aria-hidden="true"></i>users messages and opinions</div></a>
              <a href='user_added_sub.php'><div class ="info info-red info-bl col-sm-off-1 col-md-off-1 col-lg-off-1"><i class="fa fa-commenting fa-lg icon-si" aria-hidden="true"></i>user added sub or sec </div></a>
             <div class ="info info-blue info-bl col-sm-off-1 col-md-off-1 col-lg-off-1" ><i class="fa fa-user fa-lg icon-si" aria-hidden="true"></i> 
              add admin ^__^ <br><br>
              <form action="admin.php" method="post">
                <input type="email" name="email" class='col-sm-5 col-md-8 col-sm-off-1 col-lg-off-1'id="" placeholder='email'>
                <input type="password" name="password" id="" class="col-sm-5  col-md-9 col-lg-off-1" placeholder='password'>
                <input type="submit" name='add' class="col-sm-10 col-sm-off-1 top_btn" value="add" >
              </form>
              </div>
              <!-- suber user -->
              <div class ="info info-blue info-bl col-sm-off-1 col-md-off-1 col-lg-off-1" ><i class="fa fa-user fa-lg icon-si" aria-hidden="true"></i> 
              add super user :)  <br><br>
              <form action="admin.php" method="post">
                <input type="email" name="email" class='col-sm-5 col-md-8 col-sm-off-1 col-lg-off-1'id="" placeholder='email'>
                <input type="password" name="password" id="" class="col-sm-5  col-md-9 col-lg-off-1" placeholder='password'>
                <input type="submit" name='add_super' class="col-sm-10 col-sm-off-1 top_btn" value="add" >
              </form>
              </div>
              </div>
        </div>
    </div>
<!-- new idea *__* -->

</body>