<?php
if (isset($_POST['submit'])) {
  $customer_id = $_POST['customer_id'];
  $customer_first_name = $_POST['customer_first_name'];
  $customer_last_name = $_POST['customer_last_name'];
  $customer_pwd = $_POST['customer_pwd'];
  $customer_phone_number = $_POST['customer_phone_number'];
  $customer_email = $_POST['customer_email'];

  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_file.php');

  $sql = "UPDATE 046_customers
          SET customer_first_name = '$customer_first_name', customer_last_name = '$customer_last_name', customer_pwd = '$customer_pwd', customer_picture = $file_name, customer_phone_number = '$customer_phone_number', customer_email = '$customer_email'
          WHERE customer_id = $customer_id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header('Location: /student046/dwes/db/customer/db_customer_select.php');
  } else {
    include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
    echo '<p class="m-5">There was a mistake</p>';
    include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php');
  }
}
