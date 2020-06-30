<?php
class prot{
    public static function valid($txt){
        $txt=htmlspecialchars($txt,ENT_QUOTES,'UTF-8');
        $txt = trim($txt);
        $txt = stripslashes($txt);
        // $txt=str_replace('%','',$txt);
        $txt=strip_tags($txt);
        // $txt= preg_quote($txt, '/');
        
        return $txt;
    }
    public static function email_valid($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }

}

   