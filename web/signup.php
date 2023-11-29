<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/assets/favicon-tabenori.png">
    <link rel="stylesheet" href="style/templateform.css">
    <link rel="stylesheet" href="style/media.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sign Up | Tabe Nori</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
      require 'function/functions.php';
      require 'function/queryRegLog.php';

      if(isset($_POST['signup'])) { 
        if(userRegister($_POST) > 0);
      }
    ?>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center" id="container1">
      <img src="../assets/logo.png" alt="">
      <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST" id="form1">
        <h1 class="text-center mb-4">Sign Up</h1>
        <p class="warning text-align-center"><?php if (isset($msg)) { echo $msg; }; ?></p>
        <input class="form-control mb-4" type="text" name="fname" id="" placeholder="Enter Fullname"><br>
        <input class="form-control mb-4" type="date" name="bdate" id="" ><br>
        <select class="form-select form-select-lg mb-4" id="gender" name="gender"><br>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select><br>
        <input class="form-control mb-4" type="text" name="address" id="" placeholder="Enter Address"><br>
        <input class="form-control mb-4" type="text" name="username" id="" placeholder="Enter Username"><br>
        <input class="form-control mb-4" type="password" name="password" id="" placeholder="Enter Password"><br>
      
        <button class="mb-3" name="signup">Sign Up</button>
        <p>Already have an account? <a href="login.php" class="text-decoration-none">Login Here!</a></p>
      </form>
    </div>
  </body>
  <script src="../js/script.js"></script>
</html>