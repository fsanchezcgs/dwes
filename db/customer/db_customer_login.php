<?php
if (isset($_POST['submit'])) {
  // Capture variables
  $customer_email = $_POST['email'];
  $pwd = $_POST['password'];

  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

  $sql = "SELECT *
          FROM 046_customers
          WHERE customer_email = '$customer_email'
          AND customer_pwd = '$pwd'
          AND customer_status = 1";

  $result = mysqli_query($conn, $sql);
  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
  if (!(empty($customers))) {
    session_start();
    $customer = $customers[0];
    $_SESSION['user'] = $customer['customer_first_name'];
    $_SESSION['id'] = $customer['customer_id'];
    $_SESSION['role'] = $customer['customer_role'];
    $_SESSION['user_picture'] = $customer['customer_picture'];
    header('Location: /student046/dwes/index.php');
  } else {
    include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
    echo '<p class="m-5">The user do not exist</p>';
    include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php');
  }
}
