<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/function/selectFunctions.php');
if (isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

  $sql = "SELECT *
          FROM 046_customers";

  $result = mysqli_query($conn, $sql);

  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
showCustomers($customers);
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php');
