// form ___make sure from the name if taken ?
function  page_name_valid(page_name){
    
    url="../include/class/link/ajax/creatpage/page_name.php";
    tosend="info="+page_name;
    html_id='msg';
    ajax_fn(tosend,url,html_id);
    

    }