<!--the shape and the form for add    -->
<div id='new_section' class="add_new_section col-lg-6 "  style='display: none'>
            <span  style='cursor:pointer;font-family:fontawesome;float:right' class='cross' id='cross' onclick= document.getElementById('cross').parentNode.style.display='none'; >&#xf00d;   </span>
            <div class'msg' style="border-left:solid 5px #242424;height:40px;line-height: 40px; text-indent: 10px"> add link section to share it with public</div>
            <form action='profile_visit.php?user_id=<?php echo $visitor_id;?>' method="POST">
                <input type="text" name="name" id="" autofocus style='font-family:fontawesome' 
                class="col-sm-8 col-md-8 col-sm-off-1 col-lg-off-1"
                placeholder="&#xf054|   section_titel"required>
                <select class='col-lg-2 col-sm-8 col-sm-off-1 ' name='type' required>
                    <option value="programming">programming</option>
                    <option value="power">power</option>
                    <option value="control">control</option>
                    <option value="mechanical">mechanical</option>
                </select>
                <input type="text" name="about" id="" class="col-sm-10 col-sm-off-1  col-md-9 col-lg-off-1" style='font-family:fontawesome' 
                placeholder="&#xf0e5; |    more info about it" required>
                <input type="submit" class="col-sm-10 col-sm-off-1 col-lg-off-1 top_btn" value=" &#xf079 |SAVE" style='font-family:fontawesome'
                required 
                name="save_link">
        </form>          
</div>