<?php
if (isset($_POST['submit'])) {
  include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/db/function/validator.php');
  $page_theme = inputValidator($_POST['page_theme']);

  setcookie("046_theme", $page_theme, time() + (86400 * 30), "/");

  header('Location: /student046/dwes/index.php');
}
