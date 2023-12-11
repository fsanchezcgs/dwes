<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
    <form action="/student046/dwes/db/customer/db_customer_insert.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5" enctype="multipart/form-data">
        <div class="form-group">
            <label class="my-2">Profile Image</label>
            <input type="file" name="customer_picture" class="form-control" accept="image/png, image/jpg">
        </div>
        <div class="form-group">
            <label class="my-2">Name</label>
            <input type="text" name="customer_name" class="form-control">
        </div>
        <div class="form-group">
            <label class="my-2">Surname</label>
            <input type="text" name="customer_surname" class="form-control">
        </div>
        <div class="form-group">
            <label class="my-2">Password</label>
            <input type="password" name="customer_pwd" class="form-control">
        </div>
        <div class="form-group">
            <label class="my-2">Phone number</label>
            <input type="number" name="customer_number" class="form-control">
        </div>
        <div class="form-group">
            <label class="my-2">Email</label>
            <input type="text" name="customer_email" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
    </form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>