<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/customer/db_customer_update.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <?php
  $customer_id = $_POST['customer_id'];
  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');
  $sql = "SELECT * FROM 046_customers
        WHERE customer_id = $customer_id";

  $result = mysqli_query($conn, $sql);

  $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>
  <div class="form-group">
    <label class="my-2">First name</label>
    <input type="text" name="customer_first_name" value="<?php echo $customer[0]['customer_first_name']; ?>" class="form-control">
  </div>
  <div class="form-group">
    <label class="my-2">Second name</label>
    <input type="text" name="customer_last_name" value="<?php echo $customer[0]['customer_last_name']; ?>" class="form-control">
  </div>
  <div class="form-group">
    <label class="my-2">Password</label>
    <input type="text" name="customer_pwd" value="<?php echo $customer[0]['customer_pwd']; ?>" class="form-control">
  </div>
  <div class="form-group">
    <label class="my-2">Phone number</label>
    <input type="text" name="customer_phone_number" value="<?php echo $customer[0]['customer_phone_number']; ?>" class="form-control">
  </div>
  <div class="form-group">
    <label class="my-2">Email</label>
    <input type="text" name="customer_email" value="<?php echo $customer[0]['customer_email']; ?>" class="form-control">
  </div>
  <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
  <input type="text" name="customer_id" value="<?php echo ($customer_id) ?>" hidden>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>