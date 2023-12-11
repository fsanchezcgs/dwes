<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php');
    if(isset($_FILES['customer_picture'])) {
        $customer_picture = $_FILES['customer_picture'];

        $file_name = $customer_picture["name"];

        $file_type = $customer_picture["type"];

        $valid_types = array('image/png', 'image/jpg', 'image/jpeg', 'image/webp');

        if(in_array($file_type, $valid_types)) {
            $path = '/student046/dwes/img/'.$file_name;
            move_uploaded_file($customer_picture["tmp_name"], $_SERVER['DOCUMENT_ROOT'].$path);
        } else {
            echo "The image it dosen't have a valid format, or it dosen't exist";
        }
    }
    include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php');
?>