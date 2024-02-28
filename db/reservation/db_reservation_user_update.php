<?php
if (isset($_POST['submit'])) {
  $reservation_number = $_POST['reservation_number'];
  $date_in = $_POST['date_in'];
  $date_out = $_POST['date_out'];


  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

  $sql = "UPDATE 046_reservations
          SET date_in = '$date_in', date_out = '$date_out'
          WHERE reservation_number = $reservation_number";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header('Location: /student046/dwes/db/reservation/db_reservation_user_select.php');
  } else {
    include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
    echo '<p class="m-5">There was a mistake</p>';
    include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php');
  }
}
