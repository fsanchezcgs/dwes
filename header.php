<?php
    session_start();
    $user = $_SESSION['user']??"Amigo";
    $id = $_SESSION['id']??"0";
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
    <header class="header">
        <a href="/student046/dwes/index.php" class="logo"><img src="/student046/dwes/img/1f3e8.png" alt="" height="100px"></a>
        <h2><?php echo htmlspecialchars($user);?></h2>
        <div class="header-right">
            <a href="/student046/dwes/form/form_customer_select.php">customer select</a>
            <a href="/student046/dwes/form/form_customer_insert.php">customer insert</a>
            <a href="/student046/dwes/index.php">customer update</a>
            <a href="/student046/dwes/form/form_customer_delete_call.php">customer delete</a>
            <a href="/student046/dwes/form/form_reservation_insert.php">reservation insert</a>
            <a href="/student046/dwes/form/form_room_select.php">room select</a>
            <a href="/student046/dwes/form/form_room_insert.php">room insert</a>
            <a href="/student046/dwes/form/form_customer_login.php" class="active">Log in</a>
        </div>
    </header>
</body>
</html>