<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_room_delete.php" method="post">
    <label for="html">Are you sure you wana delete the room number <?php $room_id = $_POST['room_id']; echo($room_id); ?></label>
    <input type="submit" value="yes">
    <button><a href="/student046/dwes/index.php" class="no">no</a></button>
    <br>
    <!-- <label for="html">
        <?php
            include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');
            $sql = "SELECT * FROM rooms
            WHERE room_id = $room_id";

            $result = mysqli_query($conn, $sql);

            $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach($rooms as $room) {
                print_r($room);
                echo "<br>";
            }
        ?>
    </label> -->
    <input type="number" name="room_id" value="<?php echo($room_id) ?>" hidden>
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>