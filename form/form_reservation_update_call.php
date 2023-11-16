<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_reservation_update_update.php" method="post">
    <label>
        <?php
            $reservation_number = $_POST['reservation_number'];
            include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');
            $sql = "SELECT * FROM 046_reservations
            WHERE reservation_number = $reservation_number";

            $result = mysqli_query($conn, $sql);

            $reservation = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
    </label>
    <label>Customer ID: </label>
    <input type="text" name="customer_id" value="<?php echo $reservation[0]['customer_id']; ?>">
    <label>Room: </label>
    <input type="text" name="room_id" value="<?php echo $reservation[0]['room_id']; ?>">
    <label>Check In: </label>
    <input type="text" name="date_in" value="<?php echo $reservation[0]['date_in']; ?>">
    <label>Check Out: </label>
    <input type="text" name="date_out" value="<?php echo $reservation[0]['date_out']; ?>">
    <label>Status: </label>
    <select name="reservation_status">
        <?php if($reservation[0]['reservation_status'] == 'booked') {?>
        <option value="booked" selected="selected">Booked</option>
        <option value="check_in">Check In</option>
        <option value="check_out">Check Out</option>
        <option value="canceled">Canceled</option>
        <option value="abcent">Abcent</option>
        <?php } elseif($reservation[0]['reservation_status'] == 'check_in') {?>
        <option value="booked">Booked</option>
        <option value="check_in" selected="selected">Check In</option>
        <option value="check_out">Check Out</option>
        <option value="canceled">Canceled</option>
        <option value="abcent">Abcent</option>
        <?php } elseif($reservation[0]['reservation_status'] == 'check_out') {?>
        <option value="booked">Booked</option>
        <option value="check_in">Check In</option>
        <option value="check_out" selected="selected">Check Out</option>
        <option value="canceled">Canceled</option>
        <option value="abcent">Abcent</option>
        <?php } elseif($reservation[0]['reservation_status'] == 'canceled') {?>
        <option value="booked">Booked</option>
        <option value="check_in">Check In</option>
        <option value="check_out">Check Out</option>
        <option value="canceled" selected="selected">Canceled</option>
        <option value="abcent">Abcent</option>
        <?php } elseif($reservation[0]['reservation_status'] == 'abcent') {?>
        <option value="booked">Booked</option>
        <option value="check_in">Check In</option>
        <option value="check_out">Check Out</option>
        <option value="canceled">Canceled</option>
        <option value="abcent" selected="selected">Abcent</option>
        <?php }?>
    </select>
    <!-- <input type="text" name="reservation_status" value="<?php echo $reservation[0]['reservation_status']; ?>"> -->
    <label>Price: </label>
    <input type="text" name="reservation_price" value="<?php echo $reservation[0]['reservation_price'].'€'; ?>">
    <input type="submit" name="submit">
    <input type="text" name="reservation_number" value="<?php echo($reservation_number) ?>" hidden>
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>