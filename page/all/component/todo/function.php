<?php 
       if(!islogedin::logedin()){
        header('LOCATION:login.php');
    }
    $user_id=islogedin::logedin();    
    if(isset($_POST['save'])){
        if(!empty($_POST['todo'])){
            $add=prot::valid($_POST['todo']);
            additem::addit($user_id,$add);
        }else{
            $msg='the todo feiled is empty !';
        }
        
    }