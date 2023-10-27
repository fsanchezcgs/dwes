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

    print_r($customers);
    if(empty($customers)){
        echo 'no';
    } else {
        $_SESSION['user'] = $_POST['user'];
        echo $_SESSION['user'];
    }
?>