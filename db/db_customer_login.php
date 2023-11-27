<?php
    if(isset($_POST['submit'])) {
        // Capture variables
        $customer_email = $_POST['email'];
        $pwd = $_POST['password'];
        
        include('./db_connect.php');

        $sql = "SELECT *
                FROM 046_customers
                WHERE customer_email = '$customer_email'
                AND customer_pwd = '$pwd'";

        $result = mysqli_query($conn, $sql);
        $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if(empty($customers)){
            echo "The user dosen't exist";
        } else {
            if($customers[0]['customer_status'] != 0) {
                session_start();
                $customer = $customers[0];
                $_SESSION['user'] = $customer['customer_first_name'];
                $_SESSION['id'] = $customer['customer_id'];
                $_SESSION['role'] = $customer['customer_role'];
                header('Location: /student046/dwes/index.php');
            } else {
                echo "The user dosen't exist";
            }
        }
    }
?>