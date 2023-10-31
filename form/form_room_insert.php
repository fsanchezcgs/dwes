<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_room_insert.php" method="post">
    <label for="html">Type of room: </label>
    <select name="room_type" id="cars">
        <option value="1">Single</option>
        <option value="2">Double</option>
        <option value="3">Family</option>
        <option value="4">Deluxe</option>
    </select>
    <input type="submit" name="submit">
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>