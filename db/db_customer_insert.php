<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        $customer_name = $_POST['customer_name'];
        $customer_surname = $_POST['customer_surname'];
        $customer_pwd = $_POST['customer_pwd'];
        $customer_number = $_POST['customer_number'];
        $customer_email = $_POST['customer_email'];

        include('./db_connect.php');

        $sql = "INSERT INTO 046_customers
                (customer_first_name, customer_last_name, customer_pwd, customer_phone_number, customer_email)
                VALUES
                ('$customer_name', '$customer_surname', '$customer_pwd', '$customer_number', '$customer_email')";

        $result = mysqli_query($conn, $sql);

        echo 'The customer have been sucsesfully inserted';
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>