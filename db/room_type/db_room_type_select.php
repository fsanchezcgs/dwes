<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
// if (isset($_POST['submit'])) {
include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

$sql = "SELECT *
        FROM 046_rooms_type";

$result = mysqli_query($conn, $sql);

$rooms_type = mysqli_fetch_all($result, MYSQLI_ASSOC);
// }
?>
<h3 class="text-center my-3">Room Types</h3>
<section class="d-flex justify-content-center alaign-items-center flex-wrap">
  <?php foreach ($rooms_type as $room_type) { ?>
    <div class="card m-3 rooms_type h-auto">
      <h5 class="card-title ms-2 mt-2 mb-0"><?php echo $room_type['room_type_name']; ?></h5>
      <div class="card-body pb-1">
        <p>ID: <?php echo $room_type['room_type_id']; ?></p>
        <p>Price: <?php echo $room_type['room_type_price']; ?>€</p>
      </div>
      <hr class="m-0 my-2">
      <form action="/student046/dwes/form/room_type/form_room_type_update.php" method="post" class="m-0">
        <input type="number" name="room_type_id" value="<?php echo $room_type['room_type_id']; ?>" hidden>
        <input type="number" name="room_type_name" value="<?php echo $room_type['room_type_name']; ?>" hidden>
        <input type="number" name="room_type_price" value="<?php echo $room_type['room_type_price']; ?>" hidden>
        <input type="submit" value="Update" name="submit" class="ms-2 mb-2 btn btn-primary">
      </form>
    </div>
  <?php }
  ?>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>