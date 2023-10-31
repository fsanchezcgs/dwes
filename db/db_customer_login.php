<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<?php
    // Capture variables
    $customer_email = $_POST['email'];
    $pwd = $_POST['password'];
    
    include('./db_connect.php');

    $sql = "SELECT *
            FROM customers
            WHERE customer_email = '$customer_email'
            AND customer_pwd = '$pwd'";

    $result = mysqli_query($conn, $sql);
    $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(empty($customers)){
        echo "The user dosen't exist";
    } else {
        $_SESSION['user'] = $customers[0]['customer_first_name'];
        header('Location: /student046/dwes/index.php');
    }
?>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>