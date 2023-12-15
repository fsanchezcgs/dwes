<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        $room_type_id = $_POST['room_type_id'];
        $room_type_name = $_POST['room_type_name'];
        $room_type_price = $_POST['room_type_price'];

        include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');

        $sql = "UPDATE 046_rooms_type
                SET room_type_name = '$room_type_name', room_type_price = '$room_type_price'
                WHERE room_type_id = $room_type_id";

        $result = mysqli_query($conn, $sql);

        echo '<p class="m-5">The room type have been sucsesfully updated</p>';
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>