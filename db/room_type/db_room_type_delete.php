<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        $room_type_id = $_POST['room_type_id'];

        include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');

        $sql = "DELETE
                FROM 046_rooms_type
                WHERE room_type_id = $room_type_id";

        $result = mysqli_query($conn, $sql);

        if($result) {
            echo '<p class="m-5">The room type has been deleted succesfully</p>';
        } else {
            echo '<p class="m-5">There was a mistake</p>';
        }
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>