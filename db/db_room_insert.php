<?php
    $date_in = $_POST['date_in'];
    $date_out = $_POST['date_out'];

    include('./db_connect.php');

    $sql = "INSERT INTO rooms
    (room_type, room_status)
    VALUES
    (1, )";

    $result = mysqli_query($con, $sql);
?>