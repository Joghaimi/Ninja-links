//delete memories
function delete_post(post){
    url="include/class/links/delete_post_aj.php";
    tosend="post_delete="+post;
    html_id='post_body';
    id='';
    ajax_fn(tosend,url,html_id);
}

//scroll with ajax
function yHandler(){
    var wrap=document.getElementById("post_body");
    var contentHeight=wrap.offsetHeight; 
    var yoffset=window.pageYOffset;
    var y=yoffset+window.innerHeight;
    if(y >= contentHeight){
            // ajax call to get more dynamic data heir
            tosend="post_id="+id;
            url='include/class/link_scroll.php';
            html_id='post_body';
            ajax_fn(tosend,url,html_id,id);//should remove the id because its useless
            id+=6;               

                }   
}

//copey_links
function copy(id){
    var text=document.getElementById(id).childNodes[1];
    var range=document.createRange();
    range.selectNode(text);
    window.getSelection().addRange(range);
    document.execCommand("Copy");
}

//search with ajax _link
function searchs(e){
    if(e.value.length >=0){
        // alert(e.value);
        tosend="search="+e.value;
        url='include/class/search.php';
        html_id='for_search';
        ajax_fn(tosend,url,html_id);//should remove the id because its useless
        document.getElementById('for_searchs').style.display = "block";             }
}

//serch with ajax _memories
function searchs_post(e){
    if(e.value.length >=0){
        // alert(e.value);
        tosend="search="+e.value;
        url='../../include/class/post_sreach.php';
        html_id='for_search';
        ajax_fn(tosend,url,html_id);//should remove the id because its useless
        document.getElementById('for_searchs').style.display = "block";             }
}

//print post memories
function show_post(){
    url="../../include/class/print_post.php";
    tosend="print=na";
    html_id='play_list_icon_container';
    id='';
    ajax_fn(tosend,url,html_id);
   }
//play post memories ajax
function play_post(){
    url="../../include/class/print_post.php";
    tosend="print="+0;
    html_id='play_list_icon_container';
    ajax_fn(tosend,url,html_id);
    document.getElementById("play").onclick = '';

}
//next post _memries
function next_post(){
    url="../../include/class/print_post.php";
    id= document.getElementById("hid").value;
    tosend="print="+id;
    html_id='play_list_icon_container';
    ajax_fn(tosend,url,html_id);
    document.getElementById("play").onclick = play_post();

}

//dedlet post 
function delet_posts(post_ids){
    url="../../include/class/delete_posts_aj.php";
    tosend="post_delete="+post_ids;
    html_id='play_list_icon_container';
    id='';
     ajax_fn(tosend,url,html_id);
}

//delete item to do
function delete_item($to_do_id){
    url="../../include/class/to_do/delete_todo_item.php";
    tosend="todo_delete="+$to_do_id;
    html_id='todo';
     ajax_fn(tosend,url,html_id);
}

//check item todo
function check($post_id,$x){
    url="../../include/class/to_do/changestat.php";
    tosend="change="+$post_id;
    html_id='todo';
    // $x.parentNode.style.text.decoration ='none';
     ajax_fn(tosend,url,html_id);
}

//taggel _side_bar
function taggel(){
    var right_list=document.getElementById('right-list');
    if(right_list.style.height=='120px'){
        right_list.style.height='100%';
    }else{
        right_list.style.height='120px';
        
    }
}

//delet public_link
function delete_public_link($publick_link){
    url="../../include/class/delete_public_link.php";
    tosend="public_link="+$publick_link;
    html_id='publik_link';
    ajax_fn(tosend,url,html_id);
}

//delete puublic_links
function delete_public_path($publick_link){
    url="../../include/class/delete_public_path.php";
    tosend="public_link="+$publick_link;
    html_id='d';
    ajax_fn(tosend,url,html_id);
}
function links_rate(id ,table ,section){
    // alert(id +','+table+ ','+section);
    
    url="../../include/class/lib/links_rete.php";
    link_rate_info =[id,section,table]
    tosend="links_rate="+link_rate_info;
    html_id='na'+id;
    ajax_fn(tosend,url,html_id);
    
}
function add_public_link_section(x){
    alert(x);
}
function show_links_groub(user_id){
    url="../../include/class/public/public_link_grouping/print_links_group.php";
    tosend="user_id="+user_id;
    html_id='content';
    ajax_fn(tosend,url,html_id);
    // alert(user_id);

}
function show_pathes(user_id){
    url="../../include/class/public/public_pathes/print_public_pathe_ajax.php";
    tosend="user_id="+user_id;
    html_id='content';
    ajax_fn(tosend,url,html_id);

}

function show_links(user_id,section){
    user_id=[user_id ,section];
    url="../../include/class/public/public_link_grouping/print_publick_link.php";
    tosend="info="+user_id;
    html_id='links_in_group';
    ajax_fn(tosend,url,html_id);
}
/*--------------login-----------------*/
function login(email,password){
    user_id=[email ,password];
    url="../../include/class/action/login.php";
    tosend="info="+user_id;
    html_id='msg';
    ajax_fn(tosend,url,html_id);
}
/*------------sign up----------------- */
function signup(First_name,Last_name,email,pass,gender){
    
    user_id=[First_name,Last_name,email,pass,gender];
    url="../../include/class/action/signup.php";
    tosend="info="+user_id;
    html_id='msg';
    ajax_fn(tosend,url,html_id);
}
/**************profile visit {folow} *************/
function follow(user_id){
    url="../../include/class/public/profile_visite/ajax/follow.php";
    tosend="user_id="+user_id;
    html_id='folow-btn';
    ajax_fn(tosend,url,html_id);
}
/********************power links // link type****************************/
function print_links_using_type(link_to_print_section ,link_section,link_type ){
//link_section       <!-- if power =1 ; if mech =2 if elec=3 if prog=4 -->
    print_links_info=[link_to_print_section ,link_section,link_type];
    url="../../include/class/lib/links_type.php";
    tosend="info="+print_links_info;
    html_id='links';
    ajax_fn(tosend,url,html_id);
    

}