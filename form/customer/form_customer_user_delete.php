<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/customer/db_customer_user_delete.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <label>Are you sure you want delete your account</label>
  <div>
    <input type="submit" value="Yes" name="submit" class="btn btn-primary mt-3">
    <a href="/student046/dwes/index.php" class="btn btn-danger mt-3">No</a>
  </div>
  <input type="text" name="customer_id" value="<?php echo ($id) ?>" hidden>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>