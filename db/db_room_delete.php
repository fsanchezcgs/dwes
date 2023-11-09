<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<?php
    $room_id = $_POST['room_id'];

    include('./db_connect.php');

    $sql = "DELETE
    FROM rooms
    WHERE room_id = $room_id";

    $result = mysqli_query($conn, $sql);

    if($result) {
        echo 'the room has been deleted succesfully';
    } else {
        echo 'there was a mistake';
    }
?>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>