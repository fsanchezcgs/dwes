<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/room_type/db_room_type_insert.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5" enctype="multipart/form-data">
  <div class="form-group">
    <label class="my-2">Name</label>
    <input type="text" name="room_type_name" class="form-control">
  </div>
  <div class="form-group">
    <label class="my-2">Price</label>
    <input type="number" name="room_type_price" class="form-control">
  </div>
  <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>