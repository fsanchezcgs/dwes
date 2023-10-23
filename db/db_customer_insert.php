<?php
    $customer_name = $_POST['customer_name'];
    $customer_surname = $_POST['customer_surname'];
    $customer_number = $_POST['customer_number'];
    $customer_email = $_POST['customer_email'];

    include('./db_connect.php');

    $sql = "INSERT INTO customers
    (customer_first_name, customer_last_name, customer_phone_number, customer_email)
    VALUES
    ('$customer_name', '$customer_surname', '$customer_number', '$customer_email')";

    $result = mysqli_query($conn, $sql);
?>