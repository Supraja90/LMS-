<?php require('session.php');?>`  
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>
  <?php if(logged_in()){ ?>
    <script type="text/javascript">
      window.location = "index.php";
    </script>
   <?php
 } ?>

  <body class="bg-dark" style="background-image: linear-gradient(blue,white);">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header" style="width:410px">
        <img class="card-imp-top" src="image/header.jpg" alt="Card image" style="width:100%">
        <div class="card-body" style="">
          <form method="POST" action="success.php">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="user" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" style="background-image: linear-gradient(black,blue);" id="login">Login</button>
          </form>
          <div class="text-center">
            
          
          </div>
        </div>
      </div>
    </div>

  
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
