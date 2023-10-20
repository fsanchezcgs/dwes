<?php
    $room_type = $_POST['room_type'];

    include('./db_connect.php');

    $sql = "INSERT INTO rooms
    (room_type)
    VALUES
    ($room_type)";

    $result = mysqli_query($con, $sql);
?>