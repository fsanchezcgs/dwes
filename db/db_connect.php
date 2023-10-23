<?php
    $user = "root";
    $password = "";
    $server = "localhost";
    $database = "hotel";

    $conn = mysqli_connect($server, $user, $password, $database);

    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>