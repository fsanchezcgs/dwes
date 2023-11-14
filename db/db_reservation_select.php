<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        include('./db_connect.php');

        $sql = "SELECT *
                FROM 046_reservations";

        $result = mysqli_query($conn, $sql);

        $reservations = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
    <h3 class="text-center my-3">Reservations</h3>
    <section class="d-flex justify-content-center flex-wrap">
    <?php foreach($reservations as $reservation) {?>
        <div class="card m-3">
            <h5 class="card-title"><?php echo $reservation['reservation_number']?></h5>
            <div class="card-body">
                <p class="card-text"><?php echo 'Customer ID: '.$reservations['customer_id'].'<br>'.$reservations['room_type']; if($reservations['room_type'] == 3) { echo 'Category: Family<br>Price: 80,00€'; } if($reservations['room_type'] == 4) { echo 'Category: Deluxe<br>Price: 110,00€'; } ?></p>
            </div>
            <form action="/student046/dwes/form/form_reservation_update_call.php" method="post">
                <input type="number" name="customer_id" value="<?php echo $customer['customer_id']; ?>" hidden>
                <input type="number" name="room_id" value="<?php echo $customer['room_id']; ?>" hidden>
                <input type="number" name="customer_last_name" value="<?php echo $customer['customer_last_name']; ?>" hidden>
                <input type="number" name="customer_phone_number" value="<?php echo $customer['customer_phone_number']; ?>" hidden>
                <input type="number" name="customer_email" value="<?php echo $customer['customer_email']; ?>" hidden>
                <input type="submit" value="submit">
            </form>
        </div>
    <?php }
    ?>
    </section>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>