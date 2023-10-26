<?php include ('../header.php'); ?>
<?php
    include('./db_connect.php');

    $sql = "SELECT * FROM customers";

    $result = mysqli_query($conn, $sql);

    $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach($customers as $customer) {
        print_r($customer);
        echo "<br>";
    }
?>