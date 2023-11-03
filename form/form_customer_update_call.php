<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_customer_delete.php" method="post">
    <label for="html">
        <?php
            $customer_id = $_POST['customer_id'];
            include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');
            $sql = "SELECT * FROM customers
            WHERE customer_id = $customer_id";

            $result = mysqli_query($conn, $sql);

            $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
    </label>
    <label for="html">First name: </label>
    <input type="text" value="<?php $customer[0]['customer_first_name']; ?>">
    <label for="html">Second name: </label>
    <input type="text" value="<?php $customer[0]['customer_last_name']; ?>">
    <input type="submit" value="si">
    <input type="text" name="customer_id" value="<?php echo($customer_id) ?>" hidden>
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>