<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        $date_in = $_POST['date_in'];
        $date_out = $_POST['date_out'];

        include('./db_connect.php');

        $sql = "SELECT *
        FROM 046_rooms AS ro
        WHERE ro.room_id NOT IN (
            SELECT re.room_id
            FROM 046_reservations AS re
            WHERE date_in <= '$date_out' AND date_out >= '$date_in')";

        $result = mysqli_query($conn, $sql);

        $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
    <h3 class="text-center my-3">Rooms</h3>
    <section class="d-flex justify-content-center flex-wrap">
    <?php foreach($rooms as $room) {?>
        <div class="card m-3">
            <h5 class="card-title">Room number <?php echo $room['room_id'];?></h5>
            <div class="card-body">
                <img src="<?php print_r('../img/'.$room['room_img'].'.png');?>" class="card-img-top">
                <p class="card-text"><?php if($room['room_type'] == 1) { echo "Category: Single<br>Price: 50,00€"; } if($room['room_type'] == 2) { echo 'Category: Double<br>Price: 70,00€'; } if($room['room_type'] == 3) { echo 'Category: Family<br>Price: 80,00€'; } if($room['room_type'] == 4) { echo 'Category: Deluxe<br>Price: 110,00€'; } ?></p>
            </div>
        </div>
<?php }
?>
    </section>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>