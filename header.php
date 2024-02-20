<?php
session_start();
$user = $_SESSION['user'] ?? 'anonymous';
$id = $_SESSION['id'] ?? 0;
$role = $_SESSION['role'] ?? 'anonymous';
$up = $_SESSION['user_picture'] ?? 'default';
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
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
          <a href="/student046/dwes/index.php" class="navbar-brand w-25"><img src="/student046/dwes/img/icon.png" class="logo" height="80px"></a>
          <div class="collapse navbar-collapse justify-content-center w-50" id="navbarNav">
            <?php if ($role == 'admin') { ?>
              <ul class="navbar-nav">
                <li class="nav-item mx-3">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Customers
                    </button>
                    <ul class="dropdown-menu">
                      <!-- <li><a class="dropdown-item" href="/student046/dwes/form/customer/form_customer_select.php">Select</a></li> -->
                      <li><a class="dropdown-item" href="/student046/dwes/db/customer/db_customer_select.php">Select</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/customer/form_customer_select_ajax.php">Select Ajax</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/customer/form_customer_insert.php">Insert</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/customer/form_customer_update_call.php">Update</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/customer/form_customer_delete_call.php">Delete</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item mx-3">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Rooms
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/student046/dwes/form/room/form_room_check_availability.php">Check availability</a></li>
                      <!-- <li><a class="dropdown-item" href="/student046/dwes/form/room/form_room_select.php">Select</a></li> -->
                      <li><a class="dropdown-item" href="/student046/dwes/db/room/db_room_select.php">Select</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/room/form_room_insert.php">Insert</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/room/form_room_update_call.php">Update</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/room/form_room_delete_call.php">Delete</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item mx-3">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Room Type
                    </button>
                    <ul class="dropdown-menu">
                      <!-- <li><a class="dropdown-item" href="/student046/dwes/form/room_type/form_room_type_select.php">Select</a></li> -->
                      <li><a class="dropdown-item" href="/student046/dwes/db/room_type/db_room_type_select.php">Select</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/room_type/form_room_type_insert.php">Insert</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/room_type/form_room_type_update_call.php">Update</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/room_type/form_room_type_delete_call.php">Delete</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item mx-3">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Reservations
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/student046/dwes/db/reservation/db_myreservation_select.php">My reservations</a></li>
                      <!-- <li><a class="dropdown-item" href="/student046/dwes/form/reservation/form_reservation_select.php">Select</a></li> -->
                      <li><a class="dropdown-item" href="/student046/dwes/db/reservation/db_reservation_select.php">Select</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/reservation/form_reservation_insert.php">Insert</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/reservation/form_reservation_update_call.php">Update</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/reservation/form_reservation_delete_call.php">Delete</a></li>
                    </ul>
                  </div>
                </li>
                <a class="commentA" href="/student046/dwes/db/reservation/comment/db_comment_select.php">Comment Manager</a>
              </ul>
            <?php } elseif ($role == 'customer') { ?>
              <ul class="navbar-nav">
                <li class="nav-item mx-3">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Customer
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/student046/dwes/form/customer/form_customer_user_update.php">Settings</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/customer/form_customer_user_delete.php">Delete acount</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item mx-3">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Reservations
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/student046/dwes/db/reservation/db_myreservation_select.php">My reservations</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/room/form_room_check_availability.php">Make a reservation</a></li>
                      <li><a class="dropdown-item" href="/student046/dwes/form/reservation/form_reservation_delete_call.php">Delete a resereservation</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            <?php } ?>
          </div>
          <ul class="navbar-nav align-items-center justify-content-end w-25">
            <li class="nav-item d-flex justify-content-center align-items-center mb-1">
              <?php
              if ($role == 'admin' || $role == 'customer') { ?>
                <img src="/student046/dwes/img/avatar/<?php echo $up ?>" width="45px" height="45px" class="profilePicture">
              <?php echo '<h4 class="user mx-2">' . htmlspecialchars($user) . '</h4>';
              } ?>
            </li>
            <li class="nav-item d-flex">
              <?php if ($role == 'anonymous') { ?>
                <a href="/student046/dwes/form/customer/form_customer_login.php" class="nav-link rounded-2 mx-2">Log in</a>
                <a href="/student046/dwes/form/customer/form_customer_insert.php" class="nav-link rounded-2">Register</a>
              <?php } else { ?>
                <a href="/student046/dwes/db/customer/db_customer_logout.php" class="nav-link rounded-2">Log out</a>
              <?php } ?>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="container-fluid d-flex flex-column justify-content-center align-items-center">