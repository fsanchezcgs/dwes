<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_reservation_insert.php" method="post">
    <label for="html">Room id</label>
    <input type="number" name="room_id">
    <label for="html">Day of arraible</label>
    <input type="date" name="date_in">
    <label for="html">Day of exit</label>
    <input type="date" name="date_out">
    <input type="submit" name="submit">
</form>