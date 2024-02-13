<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/reservation/db_reservation_update.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <?php
  $reservation_number = $_POST['reservation_number'];
  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');
  $sql = "SELECT * FROM 046_reservations
        WHERE reservation_number = $reservation_number";

  $result = mysqli_query($conn, $sql);

  $reservation = mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>
  <div class="form-group">
    <label class="my-2">Customer ID</label>
    <input type="text" readonly name="customer_id" class="form-control" value="<?php echo $reservation[0]['customer_id']; ?>">
  </div>
  <div class="form-group">
    <label class="my-2">Room</label>
    <input type="text" name="room_id" class="form-control" value="<?php echo $reservation[0]['room_id']; ?>">
  </div>
  <div class="form-group">
    <label class="my-2">Check In</label>
    <input type="text" name="date_in" class="form-control" value="<?php echo $reservation[0]['date_in']; ?>">
  </div>
  <div class="form-group">
    <label class="my-2">Check Out</label>
    <input type="text" name="date_out" class="form-control" value="<?php echo $reservation[0]['date_out']; ?>">
  </div>
  <div class="form-group w-100">
    <label class="my-2">Status</label>
    <select name="reservation_status" class="form-control">
      <?php if ($reservation[0]['reservation_status'] == 'booked') { ?>
        <option value="booked" selected="selected">Booked</option>
        <option value="check_in">Check In</option>
        <option value="check_out">Check Out</option>
        <option value="canceled">Canceled</option>
        <option value="absent">Absent</option>
      <?php } elseif ($reservation[0]['reservation_status'] == 'check_in') { ?>
        <option value="booked">Booked</option>
        <option value="check_in" selected="selected">Check In</option>
        <option value="check_out">Check Out</option>
        <option value="canceled">Canceled</option>
        <option value="absent">Absent</option>
      <?php } elseif ($reservation[0]['reservation_status'] == 'check_out') { ?>
        <option value="booked">Booked</option>
        <option value="check_in">Check In</option>
        <option value="check_out" selected="selected">Check Out</option>
        <option value="canceled">Canceled</option>
        <option value="absent">Absent</option>
      <?php } elseif ($reservation[0]['reservation_status'] == 'canceled') { ?>
        <option value="booked">Booked</option>
        <option value="check_in">Check In</option>
        <option value="check_out">Check Out</option>
        <option value="canceled" selected="selected">Canceled</option>
        <option value="absent">Absent</option>
      <?php } elseif ($reservation[0]['reservation_status'] == 'absent') { ?>
        <option value="booked">Booked</option>
        <option value="check_in">Check In</option>
        <option value="check_out">Check Out</option>
        <option value="canceled">Canceled</option>
        <option value="absent" selected="selected">Absent</option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label class="my-2">Price</label>
    <input type="text" name="reservation_price" class="form-control" value="<?php echo $reservation[0]['reservation_price'] . '€'; ?>">
  </div>
  <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
  <input type="text" name="reservation_number" value="<?php echo ($reservation_number) ?>" hidden>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>