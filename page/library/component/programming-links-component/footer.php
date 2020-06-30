<script src="../../include/js/ajax.js"></script>
    <script>
    function print_links_using_type(link_to_print_section ,link_section,link_type ){
    //link_section       <!-- if power =1 ; if mech =2 if elec=3 if prog=4 -->
    print_links_info=[link_to_print_section ,link_section,link_type];
    url="../../include/class/lib/links_type.php";
    tosend="info="+print_links_info;
    html_id='links';
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
    </script>

</body>