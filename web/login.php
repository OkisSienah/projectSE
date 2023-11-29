<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/templateform.css">
    <link rel="stylesheet" href="style/media.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login | Tabe Nori</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
      require 'function/functions.php';
      require 'function/queryRegLog.php';

      if(isset($_SESSION['userid'])) {
          $user = $_SESSION['userid'];
          header('location:home.php');
      } else {
      }

      if(isset($_POST['login'])) {
        userLogin($_POST);
      }
    ?>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
      <img src="../assets/logo.png" alt="">
      <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <h1 class="text-center mb-3">Log In</h1>
        <p class="warning text-align-center"><?php if (isset($msg)) { echo $msg; }; ?></p>
        <input class="form-control mb-3" type="text" name="username" id="" placeholder="Enter Username"><br>
        <input class="form-control" type="password" name="password" id="" placeholder="Enter Password"><br>
        
        <button class="mb-3" name="login">Login</button>
        <p>Don't have an account? <a href="UnderConstruction.html" class="text-decoration-none">Sign Up Here!</a></p>
      </form>
    </div>
  </body>
  <script src="../js/script.js"></script>
</html>