<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_room_select.php" method="post">
    <label for="html">Day of arraible</label>
    <input type="date" name="date_in">
    <label for="html">Day of exit</label>
    <input type="date" name="date_out">
    <input type="submit" name="submit">
</form>