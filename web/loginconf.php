<?php
    if(isset($_POST['login'])) {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        
        include 'config.php';
        $queryCheck = "SELECT * FROM user where username = '$username'";
        $data = mysqli_query($conn, $queryCheck) or die ('Error, query failed ' . mysqli_error($conn));
        $output = mysqli_fetch_array($data);

        if (empty($username) || empty($password)) {
            $msg = "<script>Swal.fire({
              title: 'Oops...',
              text: 'Please fill username and password!',
              icon: 'error',
              timer: 1500,
              confirmButtonText: 'Oke'
            });</script>";
    } 
    else {
        include 'config.php';
        $queryCheck = "SELECT * FROM user where username = '$username'";
        $data = mysqli_query($conn, $queryCheck) or die ('Error, query failed ' . mysqli_error($conn));
        $output = mysqli_fetch_array($data);
        
        if ($output !== null && password_verify($password, $output['userpass'])) {
          session_start();
          $_SESSION['username'] = $username;
          mysqli_close($conn);
          header("location:home.php");
          exit;
        } 
        else {
          mysqli_close($conn);
          $msg = "<script>Swal.fire({
            title: 'Oops...',
            text: 'Invalid Username/Password!',
            icon: 'error',
            timer: 1500,
            confirmButtonText: 'Oke'
          });</script>";
        }
      }
    }
?>