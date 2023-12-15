<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        $room_type_name = $_POST['room_type_name'];
        $room_type_price = $_POST['room_type_price'];

        include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');

        $sql = "INSERT INTO 046_rooms_type
                (room_type_name, room_type_price)
                VALUES
                ('$room_type_name', '$room_type_price')";

        $result = mysqli_query($conn, $sql);

        echo '<p class="m-5">The room type have been sucsesfully inserted</p>';
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>