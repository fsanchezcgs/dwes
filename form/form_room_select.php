<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_room_select.php" method="post">
    <label>Day of arraible</label>
    <input type="date" name="date_in">
    <label>Day of exit</label>
    <input type="date" name="date_out">
    <input type="submit" name="submit">
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>