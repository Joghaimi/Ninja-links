<?php 
 function add_links_form($table_name, $section_id ){
     echo '<div class="form">
     <form action='.$table_name.' method="POST">
     <input type="text" name="sub_name" id="" autofocus style="font-family:fontawesome" class="col-sm-5 col-md-8 col-sm-off-1 col-lg-off-1"
    placeholder="&#xf054|   subject_name [or link name (like playlist name or book name)]" required>
    <input type="text" name="url" id="" class="col-sm-5  col-md-9 col-lg-off-1" style="font-family:fontawesome" placeholder="&#xf121 |   url   [make sure its work]" required>
    <input type="text" name="about" id="" class="col-sm-5  col-md-9 col-lg-off-1" style="font-family:fontawesome" placeholder="&#xf121 |  about about this thing right here" required>
    <select name="type" class="col-sm-10 
        col-lg-5 col-md-5 col-sm-off-1 col-lg-off-1 col-md-off-1 top_btn_blue">
        <option value="book">book</option>
        <option value="video">video</option>
        <option value="website">website</option>
    </select>
    <input type="submit" class="col-sm-10 col-sm-off-1 top_btn" value="&#xf02e |ADD" style="font-family:fontawesome" name="add">
    <input type="hidden" name="id" value ='.$section_id.'>
    </form>
    <br>
    </div>
     
     
     ';

 }