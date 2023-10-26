<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_customer_login.php" method="post">
    <label for="html"> User</label>
    <input type="text" name="user">
    <label for="html"> Password</label>
    <input type="text" name="password">
    <input type="submit" name="submit">
</form>