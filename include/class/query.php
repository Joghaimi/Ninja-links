<?php 
class querys{
    public static function query($stmt,$param=array()){
        global $con;
        $query=$con->prepare($stmt);
        foreach($param as $key => $value){
            $query->bindparam($key,$param[$key]);
        }
        $query->execute();
        if($query->rowCount()>0){
            return $query;
        }else{
            return false;
        }
    }
}