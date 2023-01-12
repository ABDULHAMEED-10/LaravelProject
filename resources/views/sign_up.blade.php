<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registeration Form</title>

    <link rel="icon" type="image/x-icon" href="/image/home.png" />
    <link rel="stylesheet" href="/css/signup_page.css" />
    <script src="js/script.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script
      src="https://kit.fontawesome.com/8180d0ebda.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    @if($errors->any())
      <div class="alert alert-danger">
            <ul class="list-unstyled">
                  @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                  @endforeach
            </ul>
        </div>
    @endif
  
    <div class="bg-img">
    <div
      class="container w-100 d-flex align-items-center justify-content-center"
      style="height: 100vh">
      <div class="main w-100 border border-5 rounded-3 overflow-hidden" style="height: 80%;">
        <div class="row text-center w-100" style="height: 100%">
          <div class="col-md-7 login-side-text">
            <br>
            <img src="/image/vehicle-1.png" alt="user" width="15%" />
            <div style="font-size:2rem;" class="heading-1 fw-bold">Registeration Form </div>
            <form action="{{url('/')}}/signup" method="post" >
              @csrf
              <div class="form-row">
                    <div class="col-md-12">
                        <input type="text" name="username" class="inp px-4" placeholder= "&#xf007;   Username" style="font-family: 'Font Awesome 6 Free'; font-weight: 700; font-size: 12px;">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <input type="email" name="email" class="inp px-4" placeholder= "&#xf0e0;   Email" style="font-family: 'Font Awesome 6 Free'; font-weight: 700; font-size: 12px;">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <input type="password" name="password" class="inp px-4" placeholder="&#xf023;   Password" style="font-family: 'Font Awesome 6 Free'; font-weight: 700; font-size: 12px;">
                        <br>
                        <!-- <a href="#" style="text-decoration: none; color: grey;"><p>Forgot Password?</p></a> -->
                    </div>
                </div>
                <div class="form-row" style="margin-top: 10px;">
                  <div class="col-md-12">
                    <!-- <input type="file" name="file" id="file" style="display: none;"> -->
                    <!-- <label for="file" class="img-upload"><i class="fa-solid fa-cloud-arrow-up fa-2x"></i> Upload Your Image</label> -->
                    </div>
                  </div>
                 
                <div class="form-row py-3">
                    <div class="col-md-12">
                      <!-- //submit button for signup -->
                        <input type="submit" class="btn1 btn1-2"  value="Sign Up ">
                    </div>
                </div>
                
            <p class="d-block d-sm-none"><a href="http://127.0.0.1:8000/login" style="color: grey;">Already Registered? Login Now</a></p>
        </div>
        </form>
        <div
            class="col-md-5 login-side"
          >
            <h1 style="color: black;">Already Registered?</h1> <br>
            <!-- <p class="lead h5 text-light ">Login to unlock the golden door of freedom</p> <br> -->
            <a href="http://127.0.0.1:8000/login"><button class="btn1 btn2 ">Login</button></a>
          </div>
      </div>
    </div>
    
  </div>

  
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>