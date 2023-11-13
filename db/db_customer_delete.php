<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        $customer_id = $_POST['customer_id'];

        include('./db_connect.php');

        $sql = "UPDATE 046_customers
                SET customer_status = 0
                WHERE customer_id = $customer_id";

        $result = mysqli_query($conn, $sql);

        if($result) {
            echo 'the customer has been deleted succesfully';
        } else {
            echo 'there was a mistake';
        }
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>