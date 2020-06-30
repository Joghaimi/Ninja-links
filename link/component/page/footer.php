<script src="../include/js/ajax.js"></script>
<script>
function searchs(e){
    if(e.value.length >=0){
        // alert(e.value);
        tosend="search="+e.value;
        url='../include/class/link/ajax/page/search.php';
        html_id='for_search';
        ajax_fn(tosend,url,html_id);//should remove the id because its useless
        document.getElementById('for_searchs').style.display = "block";             }

}
</script>
</body>