<?php
if (isset($_POST['submit'])) {
  $reservation_number = $_POST['reservation_number'];

  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

  $sql = "UPDATE 046_reservations
          SET reservation_status = 'canceled'
          WHERE reservation_number = $reservation_number";

  $result = mysqli_query($conn, $sql);

  header('Location: /student046/dwes/db/reservation/db_reservation_user_select.php');
}
