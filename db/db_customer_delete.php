<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<?php
    $customer_id = $_POST['customer_id'];

    include('./db_connect.php');

    $sql = "DELETE
    FROM customers
    WHERE customer_id = $customer_id";

    $result = mysqli_query($conn, $sql);

    if($result) {
        echo 'Client deleted succesfully';
    } else {
        echo 'there was a mistake';
    }
?>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>