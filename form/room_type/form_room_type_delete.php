<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/room_type/db_room_type_delete.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <label>Are you sure you wana delete the room type:
    <b>
      <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');
      $room_type_id = $_POST['room_type_id'];
      $sql = "SELECT room_type_name
              FROM 046_rooms_type
              WHERE room_type_id = $room_type_id";
      $result = mysqli_query($conn, $sql);
      $room_types = mysqli_fetch_all($result, MYSQLI_ASSOC);
      echo ($room_types[0]['room_type_name']); ?>
    </b>
  </label>
  <div>
    <input type="submit" value="Yes" name="submit" class="btn btn-primary my-3">
    <button class="btn btn-danger my-3"><a href="/student046/dwes/index.php">No</a></button>
  </div>
  <input type="text" name="room_type_id" value="<?php echo ($room_type_id) ?>" hidden>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>