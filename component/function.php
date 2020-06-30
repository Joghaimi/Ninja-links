<?php
    // add value
    if(islogedin::logedin()){
        $user_id=islogedin::logedin();
        $stmt="SELECT name FROM users WHERE id =:id";
        $param=[":id"=>$user_id];
        $user_name=querys::query($stmt,$param)->fetchAll(PDO::FETCH_ASSOC)[0]['name'];
        if(isset($_POST['save'])){
            if(!empty($_POST['url'])&&!empty($_POST['name'])){
                $titel=$_POST['name'];
                $url=$_POST['url'];
                if(!preg_match("/&@#\/%?=~_|!:,.;/",$titel)){
                    $titel=prot::valid($titel);
                    $url=prot::valid($url);
                    
                    if(strlen($titel)<=250 ){
                    $stmt="SELECT * FROM links WHERE user_id=:user_id and dates=:dates ";
                        $param=[':user_id'=>$user_id,":dates"=>date("Y/m/d")];
                        $query=querys::query($stmt,$param);
                        if(!$query){
                            $stmt="INSERT INTO links(body,titel,user_id,dates)values(:body,:titel,:user_id,:dates)";
                            $param=[':body'=>$url,'titel'=>$titel,':user_id'=>$user_id,":dates"=>date("Y/m/d")];
                            if(querys::query($stmt,$param)){
                                $msg= " saved";
                                header("LOCATION:index.php");                    
                            }else{
                                $msg= "SOME WRONGS HAPPEND";
                            }
                        }else{
                            if($query->rowCount()<20){
                                $stmt="INSERT INTO links(body,titel,user_id,dates)values(:body,:titel,:user_id,:dates)";
                                $param=[':body'=>$url,'titel'=>$titel,':user_id'=>$user_id,":dates"=>date("Y/m/d")];
                                if(querys::query($stmt,$param)){
                                    $msg= " saved";
                                    header("LOCATION:index.php");                    
                                }else{
                                    $msg= "SOME WRONGS HAPPEND";
                                }
                            }else{
                                $msg='you cany save more than 20 links in one day';
                                 
                            }
                           
                        }
                        
                    }else{
                        $msg='This Text Is To Long :)';
                    }
                }else{
                    $msg = "Only letters and white space allowed"; 
                }
    
            }else{
                $msg="you should write both title and url";
            }
        }
    }else{
        header("LOCATION:page/public/about-us/index.php");
    }
    
    //choose the style
    function styleChoose(){
        $user_id=islogedin::logedin();
        if(!$user_id){
            echo '<link rel="stylesheet" href="include\css\default_theme.css">';        
        }
        $stmt='SELECT them FROM users WHERE id=:user_id';
        $param=[':user_id'=>$user_id];
        $query=querys::query($stmt,$param);
           if($query){
    
        
        switch ($query->fetchAll(PDO::FETCH_NUM)[0][0]) {
    
            case "1":
                echo '<link rel="stylesheet" href="include\css\default_theme.css">';
                break;
            case "2":
                echo '<link rel="stylesheet" href="include\css\hinata.css">';
                break;
            case "4":
                echo '<link rel="stylesheet" href="include\css\kaneki.css">';
                break;
            case "3":
                echo '<link rel="stylesheet" href="include\css\sakura.css">';
                break;
          
        }
    }
    } 