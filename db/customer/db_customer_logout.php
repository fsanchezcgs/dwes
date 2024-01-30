<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['id']);
unset($_SESSION['role']);
unset($_SESSION['user_picture']);
header('Location: /student046/dwes/index.php');
