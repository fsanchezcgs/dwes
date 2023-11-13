<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        $customer_id = $_SESSION['id'];
        $room_id = $_POST['room_id'];
        $date_in = $_POST['date_in'];
        $date_out = $_POST['date_out'];

        include('./db_connect.php');

        $sql = "INSERT INTO 046_reservations
                (customer_id, room_id, reservation_price, date_in, date_out)
                VALUES
                ($customer_id, $room_id, (SELECT rt.room_type_price FROM 046_rooms_type AS rt WHERE rt.room_type_id = (SELECT ro.room_type FROM 046_rooms AS ro WHERE room_id = $room_id))+((((SELECT rt.room_type_price FROM 046_rooms_type AS rt WHERE rt.room_type_id = (SELECT ro.room_type FROM 046_rooms AS ro WHERE room_id = $room_id))*0.15)*(DATEDIFF('$date_out', '$date_in')))), '$date_in', '$date_out')";

        $result = mysqli_query($conn, $sql);

        echo 'The reservation have been inserted';
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>