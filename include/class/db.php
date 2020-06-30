<?php
$msg="";
//connection 
try{
define('host',"Localhost");
define('user',"root");
define('password',"");
$con=new PDO("mysql:host=".host.";dbname=link",user,password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
$msg = "their is an connection error";
}