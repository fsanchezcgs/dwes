<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/function/validator.php');
if (isset($_POST['submit'])) {
  $customer_name = inputValidator($_POST['customer_name']);
  $customer_surname = inputValidator($_POST['customer_surname']);
  $customer_pwd = inputValidator($_POST['customer_pwd']);
  $customer_number = inputValidator($_POST['customer_number']);
  $customer_email = inputValidator($_POST['customer_email']);

  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_file.php');

  $sql = "INSERT INTO 046_customers
          (customer_first_name, customer_last_name, customer_pwd, customer_picture, customer_phone_number, customer_email)
          VALUES
          ('$customer_name', '$customer_surname', '$customer_pwd', '$file_name', '$customer_number', '$customer_email')";

  $result = mysqli_query($conn, $sql);

  echo '<p class="m-5">The customer have been sucsesfully inserted</p>';
}
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php');
