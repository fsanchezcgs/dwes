<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Managment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/student046/dwes/css/style.css">
    <link rel="icon" href="/student046/dwes/img/1f3e8.png">
</head>
<body>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
    <form action="/student046/dwes/db/db_customer_delete.php" method="post">
        <label for="html">Are you sure you wana delete the customer number <?php $customer_id = $_POST['customer_id']; echo($customer_id); ?></label>
        <input type="submit" value="si">
        <input type="submit" value="no">
        <br>
        <label for="html">
            <?php
                include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');
                $sql = "SELECT * FROM customers
                WHERE customer_id = $customer_id";

                $result = mysqli_query($con, $sql);

                $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

                print_r($customer);
            ?>
        </label>
        <input type="text" name="customer_id" value="<?php echo($customer_id) ?>" hidden>
    </form>
</body>
</html>