<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
if (isset($_POST['submit'])) {
  $customer_id = $id;
  $reservation_id = $_POST['reservation_number'];
  $room_id = $_POST['room_id'];
  $date_in = $_POST['date_in'];
  $date_out = $_POST['date_out'];

  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

  $sql = "INSERT INTO 046_reservations
          (customer_id, room_id, reservation_price, date_in, date_out)
          VALUES
          ()";

  $result = mysqli_query($conn, $sql);

  echo '<p class="m-5">The reservation have been inserted</p>';
}
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php');
