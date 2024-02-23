<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/reservation/db_reservation_delete.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <label>Are you sure you wana delete the reservation number:
    <b>
      <?php $reservation_number = $_POST['reservation_number'];
      echo ($reservation_number); ?>
    </b>
  </label>
  <label class="mt-1">
    <h5>!!The reservation status must be check out, canceled, or absent¡¡</h5>
  </label>
  <div>
    <input type="submit" value="Yes" name="submit" class="btn btn-primary mt-3">
    <button class="btn btn-danger mt-3"><a href="/student046/dwes/index.php" class="no">No</a></button>
  </div>
  <input type="number" name="reservation_number" value="<?php echo ($reservation_number) ?>" hidden>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>