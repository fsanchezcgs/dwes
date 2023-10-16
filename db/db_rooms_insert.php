<?php
    $room_number = $_POST['room_number'];
    $date_in = $_POST['date_in'];
    $date_out = $_POST['date_out'];

    include('./db_connect.php');

    $sql = "INSERT INTO reservations
    (customer_id, room_id, reservation_price, date_in, date_out)
    VALUES
    (1, (SELECT room_id FROM rooms WHERE room_number = 11), ((SELECT rt.room_type_price FROM rooms_type AS rt WHERE rt.room_type_id = (SELECT ro.room_type FROM rooms AS ro WHERE room_number = $room_number))+(((SELECT rt.room_type_price FROM rooms_type AS rt WHERE rt.room_type_id = (SELECT ro.room_type FROM rooms AS ro WHERE room_number = $room_number)*0.15)*(DATEDIFF('$date_out', '$date_in')))), '$date_in', '$date_out')";

    $result = mysqli_query($con, $sql);
?>