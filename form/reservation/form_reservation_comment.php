<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/reservation/db_reservation_insert.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
    <div class="form-group">
        <label class="my-2">Score</label>
        <input type="number" name="score" class="form-control" value="5" minlength="1" maxlength="10">
    </div>
    <div class="form-group w-100">
        <label class="my-2">Comment</label>
        <textarea name="content" class="form-control" maxlength="500"></textarea>
    </div>
    <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
    <input type="number" name="reservation_number" value="<?php echo $reservation['reservation_number']; ?>" hidden>
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>