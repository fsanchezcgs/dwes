<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_POST['submit'])) {
        $reservation_number = $_POST['reservation_number'];

        include($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/db/db_connect.php');

        $sql = "UPDATE 046_reservations
                SET reservation_status = 'canceled'
                WHERE reservation_number = $reservation_number";
        $procedure = "CALL 046_recordReservations($reservation_number);";

        $result = mysqli_query($conn, $sql);
        $result = mysqli_query($conn, $procedure);

        if($result) {
            echo '<p class="m-5">The reservation has been succesfully canceled</p>';
        } else {
            echo '<p class="m-5">There was a mistake<p>';
        }
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>