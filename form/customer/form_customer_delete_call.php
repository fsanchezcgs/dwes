<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/customer/db_customer_delete.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
    <label>Are you sure you wana delete the customer number <?php $customer_id = $_POST['customer_id']; echo($customer_id); ?></label>
    <div>
        <input type="submit" value="Yes" name="submit" class="btn btn-primary my-3">
        <button class="btn btn-danger my-3"><a href="/student046/dwes/index.php">No</a></button>
    </div>
    <input type="text" name="customer_id" value="<?php echo($customer_id) ?>" hidden>
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>