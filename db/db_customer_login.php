<?php
    // Capture variables
    $user = $_POST['user'];
    $pwd = $_POST['password'];
    
    include('./db_connect.php');

    $sql = "SELECT *
            FROM customers
            WHERE customer_email = '$user'
            AND customer_pwd = '$pwd'";

    $result = mysqli_query($conn, $sql);
    $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo 'hello '.$customers[0]['customer_last_name'];
?>