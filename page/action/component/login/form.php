
<form action="login.php" method="post" class="col-sm-12 col-md-12 col-lg-12 ">
                <input  type="email" name="email" id='email' style='font-family:fontawesome' placeholder="&#xf007  | email" class="input-feiled col-sm-12 col-md-12 col-lg-12 fix"
                   onblur="email_adress(this.value)"  required min="4">
              
                   <input  type="password" name="password"id='password'  style='font-family:fontawesome' placeholder="&#xf023  | password" class=" input-feiled col-sm-12 col-md-12  col-lg-12"
                    onblur="pass(this.value,document.getElementById('email').value)" 
                 required min="4">
                
                <input type="submit" name='create' value="login" 
                style="font-family: 'Indie Flower', cursive;
                    font-size:35px;padding:5px;"class="input-feiled col-sm-12 col-md-12 col-lg-12 login-btn" >
</form>

