<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
if (isset($_POST['submit'])) {
  $comment_status = $_POST['reservation_status'];
  $comment_number = $_POST['reservation_number'];


  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

  $sql = "UPDATE 046_comments
          SET customer_id = '$customer_id', room_id = '$room_id', date_in = '$date_in', date_out = '$date_out', reservation_status = '$reservation_status', reservation_price = '$reservation_price'
          WHERE reservation_number = $reservation_number";

  $result = mysqli_query($conn, $sql);

  echo '<p class="m-5">The comment status have been sucsesfully changed</p>';
}
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php');