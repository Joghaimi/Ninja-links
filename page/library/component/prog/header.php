<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ninja-links is free website for save your links 
    and ideas posts or  any text ">
    <meta name="keywords" content="save,links,post,ninja-links,ninja,save-post,save-links,link">  

    

    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <?php
    $user_id=islogedin::logedin();
    if(!$user_id){
        echo '<link rel="stylesheet" href="..\..\include\css\default_theme.css">';        
    }
    $stmt='SELECT them FROM users WHERE id=:user_id';
    $param=[':user_id'=>$user_id];
    $query=querys::query($stmt,$param);
       if($query){

    
    switch ($query->fetchAll(PDO::FETCH_NUM)[0][0]) {

        case "1":
            echo '<link rel="stylesheet" href="..\..\include\css\default_theme.css">';
            break;
        case "2":
            echo '<link rel="stylesheet" href="..\..\include\css\hinata.css">';
            break;
        case "4":
            echo '<link rel="stylesheet" href="..\..\include\css\kaneki.css">';
            break;
        case "3":
            echo '<link rel="stylesheet" href="..\..\include\css\sakura.css">';
            break;

    }
}
   
    ?>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="../../include/lib/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=<?php echo "..\..\include\css\\$css_file.css";?>>
    <link rel="stylesheet" href="../../include/css/grid.css">
    <link rel="stylesheet" href="../../include/css/home.css">

    <link rel="icon" type="image/x-icon" href="..\..\include\img\top-icon.png" />

    <title>ninja-links</title>
    </head>
    <body>

    
