<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_room_update.php" method="post">
    <label for="html">
        <?php
            $room_id = $_POST['room_id'];
            include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');
            $sql = "SELECT * FROM 046_rooms
            WHERE room_id = $room_id";

            $result = mysqli_query($conn, $sql);

            $room = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
    </label>
    <label for="html">Room type: </label>
    <input type="text" name="room_type" value="<?php echo $room[0]['room_type']; ?>">
    <label for="html">Room image: </label>
    <input type="text" name="room_img" value="<?php echo $room[0]['room_img']; ?>">
    <label for="html">Room status: </label>
    <input type="text" name="room_status" value="<?php echo $room[0]['room_status']; ?>">
    <input type="submit" name="submit">
    <input type="text" name="room_id" value="<?php echo($room_id) ?>" hidden>
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>