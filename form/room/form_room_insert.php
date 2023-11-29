<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/room/db_room_insert.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
    <div class="form-group">
        <label class="my-2">Type of room</label>
        <select name="room_type" class="form-control">
            <option value="1">Single</option>
            <option value="2">Double</option>
            <option value="3">Family</option>
            <option value="4">Deluxe</option>
        </select>
    </div>
    <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>