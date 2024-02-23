<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/room/db_room_delete.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <label>Are you sure you wana delete the room number:
    <b>
      <?php $room_id = $_POST['room_id'];
      echo ($room_id); ?>
    </b>
  </label>
  <div>
    <input type="submit" value="Yes" name="submit" class="btn btn-primary my-3">
    <button class="btn btn-danger my-3"><a href="/student046/dwes/index.php" class="no">No</a></button>
  </div>
  <input type="number" name="room_id" value="<?php echo ($room_id) ?>" hidden>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>