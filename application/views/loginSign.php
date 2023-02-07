<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Login form</title>
    <link href=" <?php echo site_url("assets/dist/css/bootstrap.min.css");?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/styleLogin.css");?>" />
</head>
<body>
<div class="container" style="width: 1000px;text-align: center;">
    <div class="row">
        <div class="col-md-5">
            <div class="row" style="padding: 116px 38px;">
                  <h1 class="h1">Bienvenu sur TAKALO</h1>
                  <p class="h4">Veuiller inserez vos information de connexion s'il vous plait, sinon inscrivez vous.</p>
            </div>
        </div>
        <div class="col-md-6">
            <section class="wrapper" style="background: #11101D;;">      
                <div class="form signup">
                  <header>Signup</header>
                  <form method="post" action="<?php echo site_url('Login/process_sign_in'); ?>">
                    <p style="color:red"><?php echo isset($errors) ? $errors : ''; ?></p>
                    <input type="text" name="nom" placeholder="nom" required />
                    <input type="password" name="pass" placeholder="Password" required />
                    <input type="password" name="pass1" placeholder="Password" required />
                    <input type="submit" value="Sign Up" />
                  </form>
                </div>
          
                <div class="form login">
                  <header>Login</header>
                  <form method="post" action="<?php echo site_url('Login/process_login'); ?>">
                    <p style="color:red"><?php echo isset($errorl) ? $errorl : ''; ?></p>
                    <input type="text" name="nom" placeholder="nom" required />
                    <input type="password" name="pass" placeholder="Password" required />
                    <input type="submit" value="Login" />
                  </form>
                </div>
          
                <script>
                  const wrapper = document.querySelector(".wrapper"),
                    signupHeader = document.querySelector(".signup header"),
                    loginHeader = document.querySelector(".login header");
          
                  loginHeader.addEventListener("click", () => {
                    wrapper.classList.add("active");
                  });
                  signupHeader.addEventListener("click", () => {
                    wrapper.classList.remove("active");
                  });
                </script>
              </section>          
        </div>
    </div>
</div>
</body>
</html>