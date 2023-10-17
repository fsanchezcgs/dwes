<?php
    include('./db_connect.php');

    $sql = "SELECT * FROM customers";

    $result = mysqli_query($con, $sql);

    $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

    print_r($customer);
?>