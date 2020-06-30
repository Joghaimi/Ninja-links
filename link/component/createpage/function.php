<?php 
// is slged in 
if(!islogedin::logedin()){
    header('LOCATION:../page/action/login.php');
}


//form submit
if(isset($_POST['create'])){
    if( !empty($_POST["page_name"]) && !empty($_POST["specialty"]) && !empty($_POST["page_name"]) ){

        $page_name= prot::valid($_POST["page_name"]);
        $specialty= prot::valid($_POST["specialty"]);
        $University= prot::valid($_POST["University"]);
        $admin=islogedin::logedin();
        if(strlen($page_name)>4 && strlen($specialty)>4 && strlen($University)>4){
            echo "okkkkk "; 
            $stmt="SELECT * FROM page where  page_name=:page_name";
            $param=[':page_name'=>$page_name];
            if(querys::query($stmt,$param)){
                echo "try an other name";
            }else{
                 echo "cool name";
                 $stmt="INSERT INTO page(page_name,specialty,University,admin) values(:page_name,:specialty,:University,:admin)";
                 $param= [':page_name'=>$page_name , ':specialty'=>$specialty , ':University'=>$University , ":admin"=>$admin ];
                 $querys =querys::query($stmt , $param);
                 if($querys){
                     echo "cool , right ? ";
 
                 }else {
                     echo "some thing goes wrong !";
                 }
            }

        }else {
            $msg="short name man ";
        }

    }else{
        $msg="who can you mess that !!";
    }
}
//form submit
