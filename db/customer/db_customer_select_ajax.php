<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/function/selectFunctions.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');
$q = $_GET["q"];

if ($q != "") {
  $sql = "SELECT *
          FROM 046_customers";

  $result = mysqli_query($conn, $sql);

  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
  showCustomers($customers);
}
