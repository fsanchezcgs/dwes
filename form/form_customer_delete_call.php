<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/form/form_customer_delete.php" method="post">
    <label for="html">Room ID: </label>
    <input type="number" name="customer_id">
    <input type="submit" name="submit">
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>