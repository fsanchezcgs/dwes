<?php
    include('./db_connect.php');

    $sql = "SELECT * FROM customers";

    $result = mysqli_query($conn, $sql);

    $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

    print_r($customer);
?>