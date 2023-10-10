<?php
    $date_in = $_POST['date_in'];
    $date_out = $_POST['date_out'];

    include('./db/db_connect.php');

    $sql = "SELECT ro.room_id
    FROM rooms AS ro
    WHERE ro.room_id NOT IN (
        SELECT re.room_id
        FROM reservations AS re
        WHERE date_in < $date_out AND date_out > $date_in)";

    $result = mysqli_query($con, $sql);

    $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);

    print_r($rooms);
?>