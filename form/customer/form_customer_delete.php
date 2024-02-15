<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/customer/db_customer_delete.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <label>Are you sure you want to delete the customer:
    <b>
      <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');
      $customer_id = $_POST['customer_id'];
      $sql = "SELECT customer_first_name, customer_last_name
            FROM 046_customers
            WHERE customer_id = $customer_id";
      $result = mysqli_query($conn, $sql);
      $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
      echo ($customers[0]['customer_first_name'] . ' ' . $customers[0]['customer_last_name']); ?>
    </b>
  </label>
  <div>
    <input type="submit" value="Yes" name="submit" class="btn btn-primary my-3">
    <button class="btn btn-danger my-3"><a href="/student046/dwes/index.php">No</a></button>
  </div>
  <input type="text" name="customer_id" value="<?php echo ($customer_id) ?>" hidden>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>