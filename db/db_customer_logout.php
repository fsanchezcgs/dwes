<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<?php
    unset($_SESSION['user']);
    unset($_SESSION['id']);
    unset($_SESSION['role']);
    header('Location: /student046/dwes/index.php');
?>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>