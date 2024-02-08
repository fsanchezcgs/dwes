<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/room_type/db_room_type_delete.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <label>Are you sure you wana delete the room type number
    <?php $room_type_id = $_POST['room_type_id'];
    echo ($room_type_id); ?>
  </label>
  <div>
    <input type="submit" value="Yes" name="submit" class="btn btn-primary my-3">
    <button class="btn btn-danger my-3"><a href="/student046/dwes/index.php">No</a></button>
  </div>
  <input type="text" name="room_type_id" value="<?php echo ($room_type_id) ?>" hidden>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>