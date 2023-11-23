<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/form/form_customer_update_call.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
    <div class="form-group">
        <label class="my-2">Customer ID</label>
        <input type="number" name="customer_id" class="form-control">
    </div>
    <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>