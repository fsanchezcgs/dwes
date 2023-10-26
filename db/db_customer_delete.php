<?php include ('../header.php'); ?>
<?php
    $customer_id = $_POST['customer_id'];

    include('./db_connect.php');

    $sql = "DELETE
    FROM customers
    WHERE customer_id = $customer_id";

    $result = mysqli_query($conn, $sql);
?>