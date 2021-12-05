<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <div id="loginLayout">
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0" >
      <div class="container">
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-7">
              <div class="card-body">
                <div class="brand-wrapper">
                  <img src="assets/images/Vh_logojpg.svg" alt="Vision House" class="logo">
                </div>
                <p class="login-card-description">Login Here</p>
                <form method="dialog">
                  <div class="form-group ">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="l_email" class="form-control" placeholder="Email Address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="l_password" class="form-control" placeholder="Password">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login" onclick="logIn()">
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset" onclick="showSignup()">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
              </div>
            </div>
            <div class="col-md-5">
              <img src="assets/images/loginpic.jpg" alt="login" class="login-card-img">
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <div id="signupLayout">
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0" > 
      <div class="container"  >
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-5">
              <img src="assets/images/signup.webp" alt="login" class="login-card-img">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <div class="brand-wrapper">
                  <img src="assets/images/logo.svg" alt="logo" class="logo">
                </div>
                <p class="login-card-description">Sign Up Your Account</p>
                <form method="dialog">
                  <div class="form-group mb-4">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text" name="name" id="s_firstname" class="form-control" placeholder="First Name">
                      </div>
                      <div class="col-md-6">
                        <input type="text" name="name" id="s_lastname" class="form-control" placeholder="Last Name">
                      </div>
                    </div>
                    <input type="email" name="Email" id="s_email" class="form-control" placeholder="Email Address">
                    <input type="number" name="mobile_no" id="s_mobile_no" placeholder="Mobile Number" class="form-control">
                    <input type="password" name="password" id="s_password" placeholder="Password" class="form-control">
                  </div>
                  <input name="Sign Up" id="Sign Up" class="btn btn-block login-btn mb-4" type="submit" value="Sign Up" onclick="signUP()">
                </form>
                <a href="#!" class="forgot-password-link"></a>
                <p class="login-card-footer-text">Already have an account? <a href="#!" class="text-reset" onclick="showLogin()">Login Here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>  
    </main>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script>

      $("#signupLayout").hide();
      $("#loginLayout").show();
    
    function showSignup(){
      $("#signupLayout").show();
      $("#loginLayout").hide();
    }
    function showLogin(){
      $("#signupLayout").hide();
      $("#loginLayout").show();
    }

    function signUP(){

      $.ajax({
        type: "POST",
        url: "actions.php?action=signUp_admin",
        data: "first_name=" + $("#s_firstname").val() + "&last_name=" + $("#s_lastname").val() + "&email=" + $("#s_email").val() 
                + "&mobile=" + $("#s_mobile_no").val() + "&password=" + $("#s_password").val(),
        success: function(result) {
            
            if (result  == 1) {
                window.location.assign("http://localhost/blog_project/admin");
            } else {
                alert(result);
            }
        }
    
      })
    }

    function logIn(){
      $.ajax({
        type: "POST",
        url: "actions.php?action=logIn_admin",
        data: "email=" + $("#l_email").val() + "&password=" + $("#l_password").val(),
        success: function(result) {
            
            if (result  == 1) {
                window.location.assign("http://localhost/blog_project/admin");
            } else {
                alert(result);
            }
        }

      })
    }


  </script>


</body>
</html>
