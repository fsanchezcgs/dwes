<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<?php
    $date_in = $_POST['date_in'];
    $date_out = $_POST['date_out'];

    include('./db_connect.php');

    $sql = "SELECT ro.room_id
    FROM rooms AS ro
    WHERE ro.room_id NOT IN (
        SELECT re.room_id
        FROM reservations AS re
        WHERE date_in <= '$date_out' AND date_out >= '$date_in')";

    $result = mysqli_query($conn, $sql);

    $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach($rooms as $room) {?>
        <div>
            <h5>Room number <?php echo $room['room_id'];?></h5>
            <img src="../img/<?php print_r($room['room_img'].'.png');?>">
        </div>
<?php }
?>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>