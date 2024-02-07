<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
if (isset($_POST['submit'])) {
  $customer_id = $id;
  $reservation_number = $_POST['reservation_number'];
  $inserted_on = date('Y-m-d H:i:s');
  $content = $_POST['content'];
  $score = $_POST['score'];

  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

  $sql = "INSERT INTO 046_comments
          (customer_id, reservation_number, inserted_on, content, score)
          VALUES
          ($id, $reservation_number, '$inserted_on', '$content', $score)";

  $result = mysqli_query($conn, $sql);

  echo '<p class="m-5">The comment have been published</p>';
}
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php');
