<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        $customer_id = $_POST['customer_id'];
        $customer_first_name = $_POST['customer_first_name'];
        $customer_last_name = $_POST['customer_last_name'];
        $customer_phone_number = $_POST['customer_phone_number'];
        $customer_email = $_POST['customer_email'];

        include('./db_connect.php');

        $sql = "UPDATE 046_customers
                SET customer_first_name = '$customer_first_name', customer_last_name = '$customer_last_name', customer_phone_number = '$customer_phone_number', customer_email = '$customer_email'
                WHERE customer_id = $customer_id";

        $result = mysqli_query($conn, $sql);

        echo 'The customer have been sucsesfully updated';
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>