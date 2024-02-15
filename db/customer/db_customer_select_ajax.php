<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/function/selectFunctions.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');
$text = $_GET["text"];
$sql = "SELECT * FROM 046_customers WHERE customer_status = 1 AND customer_first_name LIKE '%$text%'";

$result = mysqli_query($conn, $sql);

$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
showCustomers($customers);
