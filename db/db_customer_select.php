<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<?php
    include('./db_connect.php');

    $sql = "SELECT * FROM customers";

    $result = mysqli_query($conn, $sql);

    $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
    <h3 class="text-center my-3">Customers</h3>
    <section class="d-flex justify-content-center flex-wrap">
    <?php foreach($customers as $customer) {?>
        <div class="card m-3">
            <h5 class="card-title"><?php echo $room['room_id'];?></h5>
            <div class="card-body">
                <p class="card-text"><?php if($room['room_type'] == 1) { echo "Category: Single<br>Price: 50,00€"; } if($room['room_type'] == 2) { echo 'Category: Double<br>Price: 70,00€'; } if($room['room_type'] == 3) { echo 'Category: Family<br>Price: 80,00€'; } if($room['room_type'] == 4) { echo 'Category: Deluxe<br>Price: 110,00€'; } ?></p>
            </div>
        </div>
    <?php }
    ?>
    </section>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>