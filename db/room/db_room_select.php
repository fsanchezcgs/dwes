<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
// if (isset($_POST['submit'])) {

include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

$sql = "SELECT *
        FROM 046_rooms";

$result = mysqli_query($conn, $sql);

$rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
// }
?>
<h3 class="text-center my-3">Rooms</h3>
<section class="d-flex justify-content-center alaign-items-center flex-wrap">
  <?php foreach ($rooms as $room) { ?>
    <div class="card m-3 w-auto">
      <h5 class="card-title ms-2 mt-2">Room number <?php echo $room['room_id']; ?></h5>
      <div class="card-body">
        <img src="<?php echo '/student046/dwes/img/rooms/' . $room['room_img'] . '.png'; ?>" width="250px">
        <p class="card-text">
          <?php if ($room['room_type'] == 1) {
            echo "Category: Single<br>Price: 50,00€";
          }
          if ($room['room_type'] == 2) {
            echo 'Category: Double<br>Price: 70,00€';
          }
          if ($room['room_type'] == 3) {
            echo 'Category: Family<br>Price: 80,00€';
          }
          if ($room['room_type'] == 4) {
            echo 'Category: Deluxe<br>Price: 110,00€';
          } ?>
        </p>
      </div>
      <hr class="m-0 my-2">
      <form action="/student046/dwes/form/room/form_room_update.php" method="post" class="m-0">
        <input type="number" name="room_id" value="<?php echo $room['room_id']; ?>" hidden>
        <input type="number" name="room_type" value="<?php echo $room['room_type']; ?>" hidden>
        <input type="text" name="room_img" value="<?php echo $room['room_img']; ?>" hidden>
        <input type="text" name="room_status" value="<?php echo $room['room_status']; ?>" hidden>
        <input type="submit" value="Update" name="submit" class="ms-2 mb-2 btn btn-primary">
      </form>
      <form action="/student046/dwes/form/room/form_room_update.php" method="post" class="m-0">
        <input type="number" name="room_id" value="<?php echo $room['room_id']; ?>" hidden>
        <input type="number" name="room_type" value="<?php echo $room['room_type']; ?>" hidden>
        <input type="text" name="room_img" value="<?php echo $room['room_img']; ?>" hidden>
        <input type="text" name="room_status" value="<?php echo $room['room_status']; ?>" hidden>
        <input type="submit" value="Update" name="submit" class="ms-2 mb-2 btn btn-primary">
      </form>
    </div>
  <?php
  }
  ?>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>