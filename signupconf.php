
<script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
<?php
    if(isset($_POST['signup'])) {
        $fname = $_POST['fname'];
        $bdate = date('Y-m-d', strtotime($_POST['bdate']));
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $hash = password_hash($password, PASSWORD_DEFAULT);
  
        if (empty($fname) || empty($bdate) || empty($gender) || empty($address) || empty($username) || empty($password)) {
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

            $resetID = "truncate user";
            $execute = mysqli_query($conn, $resetID) or die ('Error, query failed username '. mysqli_error($conn));

            if(empty($output)) {
                $execute;
            }

            $query = "SELECT username FROM user WHERE username = '$username'";
            $data = mysqli_query($conn, $query) or die ('Error, query failed username '. mysqli_error($conn));
            $result = mysqli_fetch_array($data);

            if ($result ) {
                $msg = "<script>Swal.fire({
                    title: 'Username already exists!',
                    text: 'Username is already used!',
                    icon: 'error',
                    timer: 2000,
                    confirmButtonText: 'OK'
                  });</script>"; // Masih Error Nih Alertnya!
            } else {
                $queryReg = "INSERT INTO user (fname, bdate, gender, address, username, password) VALUES ('$fname', '$bdate', '$gender', '$address', '$username', '$hash')";
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
        echo $fname;
        echo '<br>';
        echo $bdate;
        echo '<br>';
        echo $gender;
        echo '<br>';
        echo $address;
        echo '<br>';
        echo $username;
        echo '<br>';
        echo $password;
        echo '<br>';
    } 
?>