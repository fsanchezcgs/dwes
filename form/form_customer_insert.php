<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
    <form action="/student046/dwes/db/db_customer_insert.php" method="post">
    <label for="html">Name</label>
    <input type="text" name="customer_name">
    <label for="html">Surname</label>
    <input type="text" name="customer_surname">
    <label for="html">Password</label>
    <input type="password" name="customer_pwd">
    <label for="html">Phone number</label>
    <input type="number" name="customer_number">
    <label for="html">Email</label>
    <input type="text" name="customer_email">
    <input type="submit" name="submit">
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>