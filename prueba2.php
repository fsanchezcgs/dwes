<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<main>
  <?php 
    $file = 'read.json';

    if(file_exists($file)) {
      echo readfile($file);
    } else {
      echo 'file does not exist';
    }
  ?>
</main>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>