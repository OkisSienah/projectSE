
<script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
<?php
    if(isset($_POST['signup'])) {
        $fname = $_POST['fname'];
        $nickname = $_POST['nickname'];
        $bdate = date('Y-m-d', strtotime($_POST['bdate']));
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $hash = password_hash($password, PASSWORD_DEFAULT);
  
        if (empty($fname) || empty($nickname) || empty($bdate) || empty($gender) || empty($address) || empty($username) || empty($password)) {
            $msg = "<script>Swal.fire({
                title: 'Failed to Input!',
                text: 'Please fill all the fields!',
                icon: 'error',
                timer: 1500,
                confirmButtonText: 'OK'
              });</script>";
        } else {
            include 'config.php';
            
            $checkID = "SELECT userid FROM user";
            $validate = mysqli_query($conn, $checkID) or die ('Error, query failed username '. mysqli_error($conn));
            $output = mysqli_fetch_array($validate);

            if(empty($output)) {
                $resetID = "truncate user";
                $execute = mysqli_query($conn, $resetID) or die ('Error, query failed username '. mysqli_error($conn));
            }

            $query = "SELECT username FROM user WHERE username = '$username'";
            $data = mysqli_query($conn, $query) or die ('Error, query failed username '. mysqli_error($conn));
            $result = mysqli_fetch_array($data);

            if ($result != 0) {
                $msg = "<script>Swal.fire({
                    title: 'Username already exists!',
                    text: 'Username is already used!',
                    icon: 'error',
                    timer: 2000,
                    confirmButtonText: 'OK'
                  });</script>";
            } else {
                $queryReg = "INSERT INTO user (fname, nickname, bdate, gender, address, username, userpass) VALUES ('$fname', '$nickname', '$bdate', '$gender', '$address', '$username', '$hash')";
                mysqli_query($conn, $queryReg) or die ('Error, query failed ' . mysqli_error($conn));
                    
                mysqli_close($conn);
                $msg = "<script>const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: true,
                    timer: 3000,
                    timerProgressBar: true
                })
                      
                Toast.fire({
                    icon: 'success',
                    title: 'Sign Up Successfully!'
                });</script>";
                }
            }
    } 
?>