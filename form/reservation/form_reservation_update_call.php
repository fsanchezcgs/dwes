<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/form/reservation/form_reservation_update.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <div class="form-group">
    <label class="my-2">Reservation Number</label>
    <input type="number" name="reservation_number" class="form-control">
  </div>
  <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>