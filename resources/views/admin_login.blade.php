<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Admin Login</title>
      <link rel="icon" type="image/x-icon" href="image/home.png" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <link rel="stylesheet" href="css/admin_login.css ">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="bg-img">
         <div class="content">
            <header>Admin Login</header>
            <form action="/">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text"  id="email" required placeholder="Email or Phone">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" id="password"  name="password" required placeholder="Password">
                  <span class="show">SHOW</span>
               </div>
               <div class="pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="field">
                  <input type="submit" id="submit"  value="LOGIN">
               </div>
            </form>
            <!-- <div class="login">
               Or login with
            </div>
            <div class="links">
               <div class="facebook">
                  <i class="fab fa-facebook-f"><span>Facebook</span></i>
               </div>
               <div class="instagram">
                  <i class="fab fa-instagram"><span>Instagram</span></i>
               </div>
            </div> -->
            <!-- <div class="signup">
               Don't have account?
               <a href="signup_page.html">Signup Now</a>
            </div> -->
         </div>
         
      </div>
      <script>
         const pass_field = document.querySelector('.pass-key');
         const showBtn = document.querySelector('.show');
         showBtn.addEventListener('click', function(){
          if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
          }else{
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
          }
         });
         const pass = 1234;
         const email_1 = "abdulhameed000650@gmail.com";
         const email_2 = "adil@gmail.com";
         const email_3 = "abdul@gmail.com";

         $("#submit").click(function(){
            var email = $('#email').val();
            var password = $('#password').val();
         
         if((email== email_1 || email==email_2 ||  email==email_3 ) && password==pass){
            window.open("http://127.0.0.1:8000/dash");
            alert("Admin Login Successfully");
         }
         else{
            alert("Incorrect Password")
            window.open("http://127.0.0.1:8000/admin")
         }
         
      });
         

     
         
         
            
      </script>
   </body>
</html>