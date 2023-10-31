<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<?php
    $room_type = $_POST['room_type'];

    include('./db_connect.php');

    $sql = "INSERT INTO rooms
            (room_type)
            VALUES
            ($room_type)";

    $result = mysqli_query($conn, $sql);
?>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>