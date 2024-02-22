<?php
if (isset($_POST['submit'])) {
  $comment_status = $_POST['comment_status'];
  $customer_id = $_POST['customer_id'];
  $reservation_number = $_POST['reservation_number'];


  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

  $sql = "UPDATE 046_comments
          SET comment_status = '$comment_status'
          WHERE customer_id = $customer_id AND reservation_number = $reservation_number";

  $result = mysqli_query($conn, $sql);

  header('Location: /student046/dwes/db/reservation/comment/db_comment_select.php');
}
