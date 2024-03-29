<?php
if (isset($_POST['submit'])) {
  $customer_id = $_POST['customer_id'];
  $room_id = $_POST['room_id'];
  $date_in = $_POST['date_in'];
  $date_out = $_POST['date_out'];

  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/db_connect.php');

  $sql = "INSERT INTO 046_reservations
          (customer_id, room_id, reservation_price, date_in, date_out)
          VALUES
          ($customer_id, $room_id, (SELECT rt.room_type_price FROM 046_rooms_type AS rt WHERE rt.room_type_id = (SELECT ro.room_type FROM 046_rooms AS ro WHERE room_id = $room_id))+((((SELECT rt.room_type_price FROM 046_rooms_type AS rt WHERE rt.room_type_id = (SELECT ro.room_type FROM 046_rooms AS ro WHERE room_id = $room_id))*0.15)*(DATEDIFF('$date_out', '$date_in')))), '$date_in', '$date_out')";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header('Location: /student046/dwes/db/reservation/db_reservation_select.php');
  } else {
    include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php');
    echo '<p class="m-5">There was a mistake</p>';
    include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php');
  }
}
