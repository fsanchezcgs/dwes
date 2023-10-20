<?php
    include('./db_connect.php');
    $customer_id = $_POST['customer_id'];

    $sql = "SELECT * FROM customers
    WHERE customer_id = $customer_id";

    $result = mysqli_query($con, $sql);

    $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

    print_r($customer);
?>