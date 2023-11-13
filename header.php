<?php
    session_start();
    $user = $_SESSION['user']??'anonymous';
    $id = $_SESSION['id']??0;
    $role = $_SESSION['role']??'anonymous';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Managment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/student046/dwes/css/style.css">
    <link rel="icon" href="/student046/dwes/img/icon.png">
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
            <div class="container-fluid">
                <a href="/student046/dwes/index.php" class="navbar-brand"><img src="/student046/dwes/img/icon.png" height="80px"></a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <!-- <?php if($role == 'admin') { ?> -->
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Customers
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/student046/dwes/form/form_customer_select.php">Select</a></li>
                                    <li><a class="dropdown-item" href="/student046/dwes/form/form_customer_insert.php">Insert</a></li>
                                    <li><a class="dropdown-item" href="/student046/dwes/form/form_customer_update.php">Update</a></li>
                                    <li><a class="dropdown-item" href="/student046/dwes/form/form_customer_delete.php">Delete</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item mx-3">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Rooms
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/student046/dwes/form/form_room_select.php">Select</a></li>
                                    <li><a class="dropdown-item" href="/student046/dwes/form/form_room_insert.php">Insert</a></li>
                                    <li><a class="dropdown-item" href="/student046/dwes/form/form_room_update.php">Update</a></li>
                                    <li><a class="dropdown-item" href="/student046/dwes/form/form_room_delete.php">Delete</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item mx-3">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reservations
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/student046/dwes/form/form_reservation_select.php">Select</a></li>
                                    <li><a class="dropdown-item" href="/student046/dwes/form/form_reservation_insert.php">Insert</a></li>
                                    <li><a class="dropdown-item" href="#p">Update</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <?php } ?>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">    
                            <?php
                            if($role == 'admin' || $role == 'customer') {
                                echo'<h2 class="user mx-3">'.htmlspecialchars($user).'</h2>';
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <?php if($role == 'anonymous') { ?>
                                <a href="/student046/dwes/form/form_customer_login.php" class="nav-link rounded-2">Log in</a>
                            <?php } else { ?>
                                <a href="/student046/dwes/db/db_customer_logout.php" class="nav-link rounded-2">Log out</a>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>