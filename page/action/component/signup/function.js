function last_name(sec_name){
    if(sec_name.length<=3){
        document.getElementById('msg').innerHTML="<span style='color:red'>second name should be longer than 3 char</span>";
    }else{
        document.getElementById('msg').innerHTML=""
        
    }
}


function first_name(name){
    if(name.length<=3){
        document.getElementById('msg').innerHTML="<span style='color:red'>first name should be longer than 3 char</span>"
    }else{
        document.getElementById('msg').innerHTML=""
        
    }
}

function mail_adress(name){
    if(name.length>6){
        url="../../include/class/action/signup/email.php";
        tosend="info="+name;
        html_id='msg';
        ajax_fn(tosend,url,html_id);
        
    }

}
function the_pass(name){
    if(name.length<6){
        document.getElementById('msg').innerHTML="<span style='color:red'>password should be longer than 6 char</span>";
        
        
    }

}
