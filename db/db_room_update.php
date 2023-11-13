<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        $room_id = $_POST['room_id'];
        $room_type = $_POST['room_type'];
        $room_img = $_POST['room_img'];
        $room_status = $_POST['room_status'];

        include('./db_connect.php');

        $sql = "UPDATE 046_rooms
                SET room_type = '$room_type', room_img = '$room_img', room_status = '$room_status'
                WHERE room_id = $room_id";

        $result = mysqli_query($conn, $sql);

        echo 'The room have been sucsesfully updated';
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>