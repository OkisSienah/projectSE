<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/templateform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login | Tabe Nori</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php include 'loginconf.php'; ?>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
      <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
        <h1 class="text-center mb-3">Log In</h1>
        <p class="warning text-align-center"><?php if (isset($msg)) { echo $msg; }; ?></p>
        <input class="form-control mb-3" type="text" name="username" id="" placeholder="Enter Username"><br>
        <input class="form-control mb-3" type="password" name="password" id="" placeholder="Enter Password"><br>
        
        <button class="mb-3" name="login">Login</button>
        <p>Don't have an account? <a href="signup.php" class="text-decoration-none">Sign Up Here!</a></p>
      </form>
    </div>
  </body>
</html>