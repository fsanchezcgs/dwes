<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/reservation/db_reservation_user_update.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <?php
  $reservation_number = $_POST['reservation_number'];
  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');
  $sql = "SELECT * FROM 046_reservations
        WHERE reservation_number = $reservation_number";

  $result = mysqli_query($conn, $sql);

  $reservation = mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>
  <div class="form-group">
    <label class="my-2">Check In</label>
    <input type="text" name="date_in" class="form-control" value="<?php echo $reservation[0]['date_in']; ?>">
  </div>
  <div class="form-group">
    <label class="my-2">Check Out</label>
    <input type="text" name="date_out" class="form-control" value="<?php echo $reservation[0]['date_out']; ?>">
  </div>
  <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
  <input type="text" name="reservation_number" value="<?php echo ($reservation_number) ?>" hidden>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>