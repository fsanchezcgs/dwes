<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        $room_type = $_POST['room_type'];

        include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');

        $sql = "INSERT INTO 046_rooms
                (room_type)
                VALUES
                ($room_type)";

        $result = mysqli_query($conn, $sql);
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>