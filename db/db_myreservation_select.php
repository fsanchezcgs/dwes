<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    include('./db_connect.php');

    $sql = "SELECT *
            FROM 046_reservations
            WHERE customer_id = $id";

    $result = mysqli_query($conn, $sql);

    $reservations = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(empty($reservations)) {
?>
        <h3 class="text-center my-3">There is no reservation</h3>
<?php 
    } else {
?>
    <h3 class="text-center my-3">Reservations</h3>
    <section class="d-flex justify-content-center flex-wrap">
<?php
    foreach($reservations as $reservation) {
?>
        <div class="card m-3 p-3">
            <h5 class="card-title">Reservation number: <?php echo $reservation['reservation_number']?></h5>
            <div class="card-body">
                <p class="card-text"><?php echo 'Customer ID: '.$reservation['customer_id'].'<br>Room reserved: '.$reservation['room_id'].'<br>Check in: '.$reservation['date_in'].'<br>Check out: '.$reservation['date_out'].'<br><br>Reservation status: '.$reservation['reservation_status'].'<br>Price: '.$reservation['reservation_price'].'€'; ?></p>
            </div>
            <form action="/student046/dwes/form/form_reservation_update_call.php" method="post">
                <input type="number" name="reservation_number" value="<?php echo $reservation['reservation_number']; ?>" hidden>
                <input type="submit" name="submit" value="Edit" class="ms-2 mb-2 btn btn-primary">
            </form>
        </div>
<?php
    }
?>
    </section>
<?php } include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>