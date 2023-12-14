<?php
    if(isset($_FILES['customer_picture'])) {
        $customer_picture = $_FILES['customer_picture'];

        $file_name = $customer_picture["name"];

        $file_type = $customer_picture["type"];

        $valid_types = array('image/png', 'image/jpg', 'image/jpeg', 'image/webp');

        if(in_array($file_type, $valid_types)) {
            $path = '/student046/dwes/img/avatar/'.$file_name;
            move_uploaded_file($customer_picture["tmp_name"], $_SERVER['DOCUMENT_ROOT'].$path);
        } else {
            $file_name = "default.png";
        }
    }
?>