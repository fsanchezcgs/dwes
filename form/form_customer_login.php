<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_customer_login.php" method="post">
    <label for="html"> Email</label>
    <input type="text" name="email">
    <label for="html"> Password</label>
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>