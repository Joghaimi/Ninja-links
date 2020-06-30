function ajaxob( meth , url ){
   //create object
    if(window.XMLHttpRequest){
      ajax=new XMLHttpRequest();
    }else{
      ajax=new ActiveXobject('Microsoft.XMLHttp');
    }
    ajax.open(meth,url,true);
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    return ajax;  
}

function ajaxreturn(use_ajaxs){
  
  if( use_ajaxs.readyState==4 && use_ajaxs.status==200){
      
      return true;
    }  
  }
  //call part (we well use thin inside the page we wont [cut & pest])
  function ajax_fn(tosend,url,id){
    var use_ajax=ajaxob('POST',url);
    use_ajax.onreadystatechange=function(){
      
      if(ajaxreturn(use_ajax)){
          // action
          if(
          url!='../include/class/post_sreach.php'&&
          url!='../../include/class/action/login/password.php'&&
          url!='../../include/class/action/login/email_adress.php'&&
          url!="../../include/class/lib/links_type.php"&&
          url!='include/class/links/delete_post_aj.php'&&
          url!='../../include/class/action/login.php'&&
          url!='../../include/class/action/signup.php'&&
          url!='include/class/search.php' &&                     
          url!="../../include/class/to_do/delete_todo_item.php"&&          
          url!="../../include/class/to_do/changestat.php"&&
          url!="../include/class/delete_public_link.php"&&        
          url!="../include/class/print_post.php"&&
          url!="../../include/class/public/public_link_grouping/print_links_group.php"&&
          url!="../../include/class/public/public_pathes/print_public_pathe_ajax.php"&&
          url!="../../include/class/public/profile_visite/ajax/follow.php"
  ){
          document.getElementById(id).innerHTML+=use_ajax.responseText;
        }else{
          document.getElementById(id).innerHTML=use_ajax.responseText;
          
          }
          
         }
      }
        use_ajax.send(tosend);
        
      }   