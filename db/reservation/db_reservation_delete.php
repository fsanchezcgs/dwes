<?php
if (isset($_POST['submit'])) {
  $reservation_number = $_POST['reservation_number'];

  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

  $sql = "SELECT reservation_status
          FROM 046_reservations
          WHERE reservation_number = $reservation_number";
  $result = mysqli_query($conn, $sql);
  $status = mysqli_fetch_all($result, MYSQLI_ASSOC);
  if ($status[0]['reservation_status'] == 'booked') {
    include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
    echo '<p class="m-5">The reservation status is not check out or canceled</p>';
    include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php');
  } else {
    $procedure = "CALL 046_recordReservations($reservation_number);";
    $result = mysqli_query($conn, $procedure);
    header('Location: /student046/dwes/index.php');
  }
}
