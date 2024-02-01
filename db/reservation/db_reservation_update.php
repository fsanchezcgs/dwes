<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
if (isset($_POST['submit'])) {
  $reservation_number = $_POST['reservation_number'];
  $customer_id = $_POST['customer_id'];
  $room_id = $_POST['room_id'];
  $date_in = $_POST['date_in'];
  $date_out = $_POST['date_out'];
  $reservation_status = $_POST['reservation_status'];
  $reservation_price = $_POST['reservation_price'];


  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

  $sql = "UPDATE 046_reservations
          SET customer_id = '$customer_id', room_id = '$room_id', date_in = '$date_in', date_out = '$date_out', reservation_status = '$reservation_status', reservation_price = '$reservation_price'
          WHERE reservation_number = $reservation_number";

  $result = mysqli_query($conn, $sql);

  echo '<p class="m-5">The reservation have been sucsesfully updated</p>';
}
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php');
