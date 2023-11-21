<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_customer_delete.php" method="post">
    <label>Are you sure you wana delete the customer number <?php $customer_id = $_POST['customer_id']; echo($customer_id); ?></label>
    <input type="submit" value="yes" name="submit">
    <button><a href="/student046/dwes/index.php" class="no">no</a></button>
    <br>
    <input type="text" name="customer_id" value="<?php echo($customer_id) ?>" hidden>
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>