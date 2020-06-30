<form action="signup.php" method="post" class="col-sm-12 col-md-12 col-lg-12 ">
                
                    <input type="text" name="user_name" id="First_name"  style='font-family:fontawesome'
                    placeholder="&#xf007  | First name"
                    class="col-sm-6 col-md-5 col-lg-6  input-feiled"   onblur="first_name(this.value)" maxlength="20">
               
                    <input type="text" name="secound_name" id="Last_name"  style='font-family:fontawesome'
                        placeholder="&#xf007  | Last name"
                        class="col-sm-5 col-md-5  col-lg-5 col-lg-off-1 input-feiled"  onblur="last_name(this.value)"  maxlength="20"><br>
                   
                    <input type="email" name="email" id='email' style='font-family:fontawesome' 
                        class="col-sm-12 col-md-12 col-lg-12 fix input-feiled"
                        placeholder="&#xf003 | email" require onblur="mail_adress(this.value)" ><br>
                        
                    <input type="password" name="password" id="pass" style='font-family:fontawesome;fix'
                    placeholder="&#xf023  | password" 
                     class="col-sm-12 col-md-12  col-lg-12 input-feiled" onblur="the_pass(this.value)" require><br>
                    <div   class='  col-lg-8'
                            style=' color:black'
                    >
                        <br> <br>
                        gener
                        <br><br>
                        <input type="radio" class="col-lg-6" id='myRadio' name="gender" value="male" checked> male
                        <input type="radio"  name="gender" value="female" class="col-lg-6"  >female
                    </div>
                    <div class="fix"></div>
                    <div style="color:black;" id='msg'></div>

                    <input type="submit" name='submit' value="create" 
                    style="font-family: 'Indie Flower', cursive;
                    font-size:35px;padding:5px;"
                    class="input-feiled col-sm-12 col-md-12 col-lg-12 login-btn"/>

      
                </form>
    