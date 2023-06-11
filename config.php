<?php 
    $db_user = 'root';
    $db_pass = '';
    $db_host = 'localhost';
    $db_name = 'tabe_nori';

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }
?>