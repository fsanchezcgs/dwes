<?php
    $user = "root";
    $password = "";
    $server = "localhost";
    $database = "hotel";

    $con = mysqli_connect($server, $user, $password, $database);

    if(!$con) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>