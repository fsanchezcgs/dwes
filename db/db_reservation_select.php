<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        include('./db_connect.php');

        $customer_id = $_POST['customer_id'];

        $sql = "SELECT *
                FROM 046_reservations
                WHERE customer_id = $customer_id";

        $result = mysqli_query($conn, $sql);

        $reservations = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
    <h3 class="text-center my-3">Reservations</h3>
    <section class="d-flex justify-content-center flex-wrap">
    <?php foreach($reservations as $reservation) {?>
        <div class="card m-3">
            <h5 class="card-title"><?php echo $reservation['customer_first_name']?></h5>
            <form action="/student046/dwes/form/form_customer_update_call.php" method="post">
                <input type="number" name="customer_id" value="<?php echo $customer['customer_id']; ?>" hidden>
                <input type="number" name="room_id" value="<?php echo $customer['room_id']; ?>" hidden>
                <!-- <input type="number" name="customer_last_name" value="<?php echo $customer['customer_last_name']; ?>" hidden>
                <input type="number" name="customer_phone_number" value="<?php echo $customer['customer_phone_number']; ?>" hidden>
                <input type="number" name="customer_email" value="<?php echo $customer['customer_email']; ?>" hidden> -->
                <input type="submit" value="submit">
            </form>
        </div>
    <?php }
    ?>
    </section>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>