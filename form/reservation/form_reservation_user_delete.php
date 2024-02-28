<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/reservation/db_reservation_user_delete.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <label>Are you sure you want cancel the reservation number:
    <b>
      <?php $reservation_number = $_POST['reservation_number'];
      echo ($reservation_number); ?>
    </b>
  </label>
  <label class="mt-1">
    <h5>!!You will lose your reservation¡¡</h5>
  </label>
  <div>
    <input type="submit" value="Yes" name="submit" class="btn btn-primary mt-3">
    <a href="/student046/dwes/db/reservation/db_reservation_user_select.php" class="btn btn-danger mt-3">No</a>
  </div>
  <input type="number" name="reservation_number" value="<?php echo ($reservation_number) ?>" hidden>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>