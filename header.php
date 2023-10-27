<?php
    session_start();
    $user = $_SESSION['user'];
?>
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
    <nav class="header navbar">
        <a href="/student046/dwes/index.php"><img src="/student046/dwes/img/1f3e8.png" alt="" class="logo" height="100px"></a>
        <h4>
            <a href="/student046/dwes/form/form_customer_select.php">customer select</a>
        </h4>
        <h4>
            <a href="/student046/dwes/form/form_customer_insert.php">customer insert</a>
        </h4>
        <h4>
            <a href="/student046/dwes/index.php">customer update</a>
        </h4>
        <h4>
            <a href="/student046/dwes/form/form_customer_delete_call.php">customer delete</a>
        </h4>
        <h4>
            <a href="/student046/dwes/form/form_reservation_insert.php">reservation insert</a>
        </h4>
        <h4>
            <a href="/student046/dwes/form/form_room_select.php">room select</a>
        </h4>
        <h4>
            <a href="/student046/dwes/form/form_room_insert.php">room insert</a>
        </h4>
        <h4>
            <a href="/student046/dwes/form/form_customer_login.php">Log in</a>
        </h4>
    </nav>
    <h1><?php echo htmlspecialchars($user);?></h1>
</body>
</html>