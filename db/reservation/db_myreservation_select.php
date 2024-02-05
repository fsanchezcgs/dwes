<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

$sql = "SELECT *
        FROM 046_reservations
        WHERE customer_id = $id";

$result = mysqli_query($conn, $sql);

$reservations = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (!(empty($reservations))) {
?>
  <h3 class="text-center my-3">Reservations</h3>
  <section class="d-flex justify-content-center alaign-items-center flex-wrap">
    <?php
    foreach ($reservations as $reservation) {
    ?>
      <div class="card m-3 p-3">
        <h5 class="card-title">Reservation number: <?php echo $reservation['reservation_number'] ?></h5>
        <div class="card-body">
          <p class="card-text spanR"><?php echo 'Customer ID: ' . $reservation['customer_id'] ?></p>
          <p class="spanR"><?php echo 'Room reserved: ' . $reservation['room_id'] ?></p>
          <p class="spanR"><?php echo 'Check in: ' . $reservation['date_in'] ?></p>
          <p><?php echo 'Check out: ' . $reservation['date_out'] ?></p>
          <hr>
          <p class="spanR"><?php echo 'Reservation status: ' . $reservation['reservation_status'] ?></p>
          <p class="spanR"><?php echo 'Price: ' . $reservation['reservation_price'] . '€'; ?></p>
        </div>
        <form action="/student046/dwes/form/reservation/form_myreservation_update_call.php" method="post">
          <input type="number" name="reservation_number" value="<?php echo $reservation['reservation_number']; ?>" hidden>
          <input type="submit" name="submit" value="Edit" class="ms-2 mb-2 btn btn-primary">
        </form>
        <form action="/student046/dwes/form/reservation/comment/form_comment_insert.php" method="post">
          <input type="number" name="reservation_number" value="<?php echo $reservation['reservation_number']; ?>" hidden>
          <input type="submit" name="submit" value="Comment" class="ms-2 mb-2 btn btn-primary">
        </form>
      </div>
    <?php
    }
    ?>
  </section>
<?php
} else { ?>
  <h3 class="text-center my-3">There is no reservation</h3>
<?php }
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>