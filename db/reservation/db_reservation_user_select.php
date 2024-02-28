<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

$sql = "SELECT *
        FROM 046_reservations
        WHERE customer_id = $id AND reservation_status = 'booked'";

$result = mysqli_query($conn, $sql);

$reservations = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (!(empty($reservations))) {
?>
  <h3 class="text-center my-3">Reservations</h3>
  <section class="d-flex justify-content-center alaign-items-center flex-wrap">
    <?php
    foreach ($reservations as $reservation) {
      $sql2 = "SELECT *
               FROM 046_comments
               WHERE reservation_number = $reservation[reservation_number]";
      $result2 = mysqli_query($conn, $sql2);
      $comment = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    ?>
      <div class="card m-3 p-3 w-auto">
        <h5 class="card-title">Reservation number: <?php echo $reservation['reservation_number'] ?></h5>
        <div class="card-body pb-0">
          <p class="m-0"><?php echo 'Customer ID: ' . $reservation['customer_id'] ?></p>
          <p class="m-0"><?php echo 'Room reserved: ' . $reservation['room_id'] ?></p>
          <p class="m-0"><?php echo 'Check in: ' . $reservation['date_in'] ?></p>
          <p class="m-0"><?php echo 'Check out: ' . $reservation['date_out'] ?></p>
          <p class="m-0"><?php echo 'Reservation status: ' . $reservation['reservation_status'] ?></p>
          <p class="m-0"><?php echo 'Price: ' . $reservation['reservation_price'] . '€'; ?></p>
        </div>
        <?php if ($reservation['reservation_status'] == 'booked') { ?>
          <hr>
        <?php } else if (empty($comment) && $reservation['reservation_status'] == 'check_out') { ?>
          <hr>
        <?php } ?>
        <div class="d-flex">
          <?php if ($reservation['reservation_status'] == 'booked') { ?>
            <form action="/student046/dwes/form/reservation/form_reservation_user_update.php" method="post">
              <input type="number" name="reservation_number" value="<?php echo $reservation['reservation_number']; ?>" hidden>
              <input type="submit" name="submit" value="Edit" class="ms-2 mb-2 btn btn-primary">
            </form>
            <form action="/student046/dwes/form/reservation/form_reservation_user_delete.php" method="post">
              <input type="number" name="reservation_number" value="<?php echo $reservation['reservation_number']; ?>" hidden>
              <input type="submit" name="submit" value="Cancel" class="ms-2 mb-2 btn btn-danger">
            </form>
          <?php } ?>
          <?php if (empty($comment) && $reservation['reservation_status'] == 'check_out') { ?>
            <form action="/student046/dwes/form/reservation/comment/form_comment_insert.php" method="post">
              <input type="number" name="reservation_number" value="<?php echo $reservation['reservation_number']; ?>" hidden>
              <input type="submit" name="submit" value="Comment" class="ms-2 mb-2 btn btn-primary">
            </form>
          <?php } ?>
        </div>
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