<?php
function showCustomers($customers)
{
?>
  <h3 class="text-center my-3">Customers</h3>
  <section class="d-flex justify-content-center alaign-items-center flex-wrap">
    <?php foreach ($customers as $customer) { ?>
      <div class="card m-3 customersCard w-auto text-center">
        <h5 class="card-title mt-2 mb-0"><?php echo $customer['customer_first_name'] . ' ' . $customer['customer_last_name']; ?></h5>
        <hr class="m-0 my-2">
        <div class="d-flex">
          <form action="/student046/dwes/form/customer/form_customer_update.php" method="post" class="m-0">
            <input type="number" name="customer_id" value="<?php echo $customer['customer_id']; ?>" hidden>
            <input type="text" name="customer_first_name" value="<?php echo $customer['customer_first_name']; ?>" hidden>
            <input type="text" name="customer_last_name" value="<?php echo $customer['customer_last_name']; ?>" hidden>
            <input type="number" name="customer_phone_number" value="<?php echo $customer['customer_phone_number']; ?>" hidden>
            <input type="email" name="customer_email" value="<?php echo $customer['customer_email']; ?>" hidden>
            <input type="submit" value="Update" name="submit" class="ms-2 mb-2 btn btn-primary">
          </form>
          <form action="/student046/dwes/form/customer/form_customer_delete.php" method="post" class="m-0">
            <input type="number" name="customer_id" value="<?php echo $customer['customer_id']; ?>" hidden>
            <input type="submit" value="Delete" name="submit" class="mx-2 mb-2 btn btn-danger">
          </form>
        </div>
      </div>
    <?php }
    ?>
  </section>
<?php
}
?>