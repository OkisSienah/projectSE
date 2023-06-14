<?php
    session_start();
    $user = $_SESSION['username'];
    if(!isset($_SESSION['username'])) {
        header('location: login.php');
    } else {
        include 'config.php';
        if(isset($_POST['addToCart1'])) {
            $qOnigiri1 = $_POST['onigiri1'];
    
            $queryCart = "SELECT user FROM cart WHERE user = '$user'";
            $dataCart = mysqli_query($conn, $queryCart);
            $dataCart = mysqli_fetch_assoc($dataCart);
    
            include 'config.php';
            if(isset($dataCart['user']) == $user) {
                $queryUpdate = "UPDATE cart SET q_noriAS = '$qOnigiri1' WHERE user = '$user'";
                mysqli_query($conn, $queryUpdate) or die ('Error, query failed1. ' . mysqli_error($conn));
                $msg = "<script>Swal.fire({
                    title: 'Success!',
                    text: 'Update Cart Successfully!',
                    icon: 'success',
                    timer: 1500,
                    confirmButtonText: 'Oke'
                  });</script>";
            } else {
                $queryCart = "INSERT INTO cart (user, q_noriAS) VALUES ('$user','$qOnigiri1')";
                mysqli_query($conn, $queryCart) or die ('Error, query failed2. ' . mysqli_error($conn));
                $msg = "<script>Swal.fire({
                    title: 'Success!',
                    text: 'Add to Cart Successfully!',
                    icon: 'success',
                    timer: 1500,
                    confirmButtonText: 'Oke'
                  });</script>";
            }
            
            
            mysqli_close($conn);
        }
        if(isset($_POST['addToCart2'])) {
            $qOnigiri2 = $_POST['onigiri2'];
    
            $queryCart = "SELECT user FROM cart WHERE user = '$user'";
            $dataCart = mysqli_query($conn, $queryCart);
            $dataCart = mysqli_fetch_assoc($dataCart);
    
            include 'config.php';
            if(isset($dataCart['user']) == $user) {
                $queryUpdate = "UPDATE cart SET q_noriIT = '$qOnigiri2' WHERE user = '$user'";
                mysqli_query($conn, $queryUpdate) or die ('Error, query failed1. ' . mysqli_error($conn));
                $msg = "<script>Swal.fire({
                    title: 'Success!',
                    text: 'Update Cart Successfully!',
                    icon: 'success',
                    timer: 1500,
                    confirmButtonText: 'Oke'
                  });</script>";
            } else {
                $queryCart = "INSERT INTO cart (user, q_noriIT) VALUES ('$user', '$qOnigiri2')";
                mysqli_query($conn, $queryCart) or die ('Error, query failed2. ' . mysqli_error($conn));
                $msg = "<script>Swal.fire({
                    title: 'Success!',
                    text: 'Add to Cart Successfully!',
                    icon: 'success',
                    timer: 1500,
                    confirmButtonText: 'Oke'
                  });</script>";
            }
            
            
            mysqli_close($conn);
        }
        if(isset($_POST['addToCart3'])) {
            $qOnigiri3 = $_POST['onigiri3'];
    
            $queryCart = "SELECT user FROM cart WHERE user = '$user'";
            $dataCart = mysqli_query($conn, $queryCart);
            $dataCart = mysqli_fetch_assoc($dataCart);
    
            include 'config.php';
            if(isset($dataCart['user']) == $user) {
                $queryUpdate = "UPDATE cart SET q_noriTM = '$qOnigiri3' WHERE user = '$user'";
                mysqli_query($conn, $queryUpdate) or die ('Error, query failed1. ' . mysqli_error($conn));
                $msg = "<script>Swal.fire({
                    title: 'Success!',
                    text: 'Update Cart Successfully!',
                    icon: 'success',
                    timer: 1500,
                    confirmButtonText: 'Oke'
                  });</script>";
            } else {
                $queryCart = "INSERT INTO cart (user, q_noriTM) VALUES ('$user', '$qOnigiri3')";
                mysqli_query($conn, $queryCart) or die ('Error, query failed2. ' . mysqli_error($conn));
                $msg = "<script>Swal.fire({
                    title: 'Success!',
                    text: 'Add to Cart Successfully!',
                    icon: 'success',
                    timer: 1500,
                    confirmButtonText: 'Oke'
                  });</script>";
            }

            mysqli_close($conn);
        }
        if(isset($_POST['addToCart4'])) {
            $qOnigiri4 = $_POST['onigiri4'];
    
            $queryCart = "SELECT user FROM cart WHERE user = '$user'";
            $dataCart = mysqli_query($conn, $queryCart);
            $dataCart = mysqli_fetch_assoc($dataCart);
    
            include 'config.php';
            if(isset($dataCart['user']) == $user) {
                $queryUpdate = "UPDATE cart SET q_noriR = '$qOnigiri4' WHERE user = '$user'";
                mysqli_query($conn, $queryUpdate) or die ('Error, query failed1. ' . mysqli_error($conn));
                $msg = "<script>Swal.fire({
                    title: 'Success!',
                    text: 'Update Cart Successfully!',
                    icon: 'success',
                    timer: 1500,
                    confirmButtonText: 'Oke'
                  });</script>";
            } else {
                $queryCart = "INSERT INTO cart (user, q_noriR) VALUES ('$user','$qOnigiri4')";
                mysqli_query($conn, $queryCart) or die ('Error, query failed2. ' . mysqli_error($conn));
                $msg = "<script>Swal.fire({
                    title: 'Success!',
                    text: 'Add to Cart Successfully!',
                    icon: 'success',
                    timer: 1500,
                    confirmButtonText: 'Oke'
                  });</script>";
            }
            
            mysqli_close($conn);
        }
        if(isset($_POST['addAllToCart'])) {
            $qOnigiri1 = $_POST['onigiri1'];
            $qOnigiri2 = $_POST['onigiri2'];
            $qOnigiri3 = $_POST['onigiri3'];
            $qOnigiri4 = $_POST['onigiri4'];
    
            $queryCart = "SELECT user FROM cart WHERE user = '$user'";
            $dataCart = mysqli_query($conn, $queryCart);
            $dataCart = mysqli_fetch_assoc($dataCart);
    
            include 'config.php';
            if(isset($dataCart['user']) == $user) {
                $queryUpdate = "UPDATE cart SET q_noriAS = '$qOnigiri1', q_noriIT = '$qOnigiri2', q_noriTM = '$qOnigiri3', q_noriR = '$qOnigiri4' WHERE user = '$user'";
                mysqli_query($conn, $queryUpdate) or die ('Error, query failed1. ' . mysqli_error($conn));
                $msg = "<script>Swal.fire({
                    title: 'Success!',
                    text: 'Update Cart Successfully!',
                    icon: 'success',
                    timer: 1500,
                    confirmButtonText: 'Oke'
                  });</script>";
            } else {
                $queryCart = "INSERT INTO cart (user, q_noriAS, q_noriIT, q_noriTM, q_noriR) VALUES ('$user','$qOnigiri1', '$qOnigiri2', '$qOnigiri3', '$qOnigiri4')";
                mysqli_query($conn, $queryCart) or die ('Error, query failed2. ' . mysqli_error($conn));
                $msg = "<script>Swal.fire({
                    title: 'Success!',
                    text: 'Add to Cart Successfully!',
                    icon: 'success',
                    timer: 1500,
                    confirmButtonText: 'Oke'
                  });</script>";
            }
            
            mysqli_close($conn);
        }
        $onigiriPrice = 13000;
        $onigiriFormatPrice = number_format($onigiriPrice, 2, '.', ',');
    }

    if(isset($_POST['chgPage'])) {
        header('location:checkOut.php');
    }
?>

            <!-- include 'config.php';
            if(isset($dataCart['username']) == $username) {
                $queryUpdate = "UPDATE cart SET q_noriAS = '$qOnigiri1', q_noriIT = '$qOnigiri2', q_noriTM = '$qOnigiri3', q_noriR = '$qOnigiri4' WHERE username = '$username'";
                mysqli_query($conn, $queryUpdate) or die ('Error, query failed1. ' . mysqli_error($conn));
            } else {
                $queryCart = "INSERT INTO cart (username, q_noriAS, q_noriIT, q_noriTM, q_noriR) VALUES ('$username','$qOnigiri1', '$qOnigiri2', '$qOnigiri3', '$qOnigiri4')";
                mysqli_query($conn, $queryCart) or die ('Error, query failed2. ' . mysqli_error($conn));
            } -->