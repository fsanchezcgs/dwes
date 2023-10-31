<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_customer_delete.php" method="post">
    <label for="html">Are you sure you wana delete the customer number <?php $customer_id = $_POST['customer_id']; echo($customer_id); ?></label>
    <input type="submit" value="si">
    <input type="submit" value="no">
    <br>
    <label for="html">
        <?php
            include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');
            $sql = "SELECT * FROM customers
            WHERE customer_id = $customer_id";

            $result = mysqli_query($conn, $sql);

            $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach($customers as $customer) {
                print_r($customer);
                echo "<br>";
            }
        ?>
    </label>
    <input type="text" name="customer_id" value="<?php echo($customer_id) ?>" hidden>
</form>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>