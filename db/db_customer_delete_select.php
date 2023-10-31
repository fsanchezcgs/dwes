<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<?php
    $customer_id = $_POST['customer_id'];

    include('./db_connect.php');

    $sql = "SELECT * FROM customers
    WHERE customer_id = $customer_id";

    $result = mysqli_query($conn, $sql);

    $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

    print_r($customer);
?>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>