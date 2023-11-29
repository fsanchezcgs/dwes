<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/reservation/db_reservation_insert.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
    <div class="form-group">
        <label class="my-2">Room ID</label>
        <input type="number" name="room_id" class="form-control">
    </div>
    <div class="form-group w-100">
        <label class="my-2">Day of arraible</label>
        <input type="date" name="date_in" class="form-control">
    </div>
    <div class="form-group w-100">
        <label class="my-2">Day of exit</label>
        <input type="date" name="date_out" class="form-control">
    </div>
    <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>