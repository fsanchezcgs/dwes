<?php include ('../header.php'); ?>
<?php
    // Capture variables
    $user = $_POST['user'];
    $pwd = $_POST['password'];
    
    include('./db_connect.php');

    $sql = "SELECT *
            FROM customers
            WHERE customer_first_name = '$user'
            AND customer_pwd = '$pwd'";

    $result = mysqli_query($conn, $sql);
    $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(empty($customers)){

    } else {
        $_SESSION['user'] = $_POST['user'];
        echo $_SESSION['user'];
    }
?>