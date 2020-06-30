// form email adress
function  email_adress(email){
    if(email.length>6){
        url="../../include/class/action/login/email_adress.php";
        tosend="info="+email;
        html_id='msg';
        ajax_fn(tosend,url,html_id);
        
    }


}
// form password password
function  pass(password_name,email){
    if(password_name.length>=6){
        url="../../include/class/action/login/password.php";
        info=[password_name,email];
        tosend="info="+info;
        html_id='msg';
        ajax_fn(tosend,url,html_id);
        
    }else{
        document.getElementById('msg').innerHTML='email or password is wrong';
    }


}