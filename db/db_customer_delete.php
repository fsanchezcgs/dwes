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
            echo '<p class="m-5">The customer has been deleted succesfully</p>';
        } else {
            echo '<p class="m-5">There was a mistake</p>';
        }
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>