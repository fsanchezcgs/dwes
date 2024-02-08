<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/room_type/db_room_type_update.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <?php
  $room_type_id = $_POST['room_type_id'];
  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');
  $sql = "SELECT *
          FROM 046_rooms_type
          WHERE room_type_id = $room_type_id";

  $result = mysqli_query($conn, $sql);

  $room_type = mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>
  <div class="form-group">
    <label class="my-2">First name</label>
    <input type="text" name="room_type_name" value="<?php echo $room_type[0]['room_type_name']; ?>" class="form-control">
  </div>
  <div class="form-group">
    <label class="my-2">Phone number</label>
    <input type="text" name="room_type_price" value="<?php echo $room_type[0]['room_type_price']; ?>" class="form-control">
  </div>
  <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
  <input type="text" name="room_type_id" value="<?php echo ($room_type_id) ?>" hidden>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>