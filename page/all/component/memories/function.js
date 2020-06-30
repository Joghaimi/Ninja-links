    function ca(){
        var x=document.getElementById("mem").value;
        var y=document.getElementById("index_num").value;        
        var all=x.split(',');
        document.getElementById("body").innerHTML=all[y];
        if(y<all.length-1){
            y++;
        }else{
            y=0;
        } 
        document.getElementById("index_num").value=y;
    }
    function caplay(){
        var x=document.getElementById("mem").value;
        var all=x.split(',');
        var len=all.length-1;
        if( show_in <= len){
            document.getElementById("body").innerHTML=all[show_in];
            show_in++;
            window.setTimeout(caplayy, 3000)
        
        }else if(show_in > len && show_in!=1000 ){
            show_in=0;
            document.getElementById("body").innerHTML=all[show_in];
            window.setTimeout(caplayy, 3000);
            
        }
        
    }
    show_in=0;
    function caplayy(){
        window.setTimeout(caplay, 3000)

    }
    function start_show(){
        show_in=0;
        caplayy()
    }
    function pause(){
        show_in=1000;
        
    }
