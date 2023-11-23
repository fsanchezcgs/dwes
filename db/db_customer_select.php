<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        include('./db_connect.php');

        $sql = "SELECT *
                FROM 046_customers";

        $result = mysqli_query($conn, $sql);

        $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
    <h3 class="text-center my-3">Customers</h3>
    <section class="d-flex justify-content-center flex-wrap">
    <?php foreach($customers as $customer) {?>
        <div class="card m-3 customers h-auto">
            <h5 class="card-title ms-2 mt-2 mb-0"><?php echo $customer['customer_first_name'].' '.$customer['customer_last_name'];?></h5>
            <hr class="line m-0 my-2">
            <form action="/student046/dwes/form/form_customer_update_call.php" method="post" class="m-0">
                <input type="number" name="customer_id" value="<?php echo $customer['customer_id']; ?>" hidden>
                <input type="number" name="customer_first_name" value="<?php echo $customer['customer_first_name']; ?>" hidden>
                <input type="number" name="customer_last_name" value="<?php echo $customer['customer_last_name']; ?>" hidden>
                <input type="number" name="customer_phone_number" value="<?php echo $customer['customer_phone_number']; ?>" hidden>
                <input type="number" name="customer_email" value="<?php echo $customer['customer_email']; ?>" hidden>
                <input type="submit" value="submit" class="ms-2 mb-2 btn btn-primary">
            </form>
        </div>
    <?php }
    ?>
    </section>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>