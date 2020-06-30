<div class = 'form col-sm-10 col-sm-off-1' >
    <form action="createpage.php" method="post">
        <input type="text" name="page_name" id="" placeholder='اسم الصفحة ' onblur="page_name_valid(this.value)" class = 'col-sm-12' required min="4">
        <input type="text" name="specialty" id="" placeholder='التخصص' onblur="" 
        class = 'col-sm-12' required min="4">
        <input type="text" name="University" id="" placeholder='اسم الجامعة ' 
        class = 'col-sm-12' required min='4'>
        <input type="submit" name='create' value="create" class = 'col-sm-12'>
    </form>
</div>