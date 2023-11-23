<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_room_update.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
    <?php
        $room_id = $_POST['room_id'];
        include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');
        $sql = "SELECT *
                FROM 046_rooms
                WHERE room_id = $room_id";

        $result = mysqli_query($conn, $sql);

        $room = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
    <div class="form-group">
        <label class="my-2">Room type</label>
        <input type="text" name="room_type" class="form-control" value="<?php echo $room[0]['room_type']; ?>">
    </div>
    <div class="form-group">
        <label class="my-2">Room image</label>
        <input type="text" name="room_img" class="form-control" value="<?php echo $room[0]['room_img']; ?>">
    </div>
    <div class="form-group">
        <label class="my-2">Room status</label>
        <input type="text" name="room_status" class="form-control" value="<?php echo $room[0]['room_status']; ?>">
    </div>
    <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
    <input type="text" name="room_id" value="<?php echo($room_id) ?>" hidden>
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>