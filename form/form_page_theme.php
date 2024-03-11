<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<form action="/student046/dwes/db/db_page_theme.php" method="post" class="shadow bg-white rounded p-4 d-flex flex-column align-items-center m-5">
  <label>Select the page theme</label>
  <select name="page_theme" class="form-control">
    <?php if (strcmp($_COOKIE['046_theme'], "purple") === 0) { ?>
      <option value="purple" selected="selected">Purple</option>
      <option value="blue">Blue</option>
      <option value="orange">Orange</option>
    <?php } elseif (strcmp($_COOKIE['046_theme'], "blue") === 0) { ?>
      <option value="purple">Purple</option>
      <option value="blue" selected="selected">Blue</option>
      <option value="orange">Orange</option>
    <?php } elseif (strcmp($_COOKIE['046_theme'], "orange") === 0) { ?>
      <option value="purple">Purple</option>
      <option value="blue">Blue</option>
      <option value="orange" selected="selected">Orange</option>
    <?php } else { ?>
      <option value="purple" selected="selected">Purple</option>
      <option value="blue">Blue</option>
      <option value="orange">Orange</option>
    <?php } ?>
  </select>
  <input type="submit" name="submit" class="btn btn-primary my-3 w-100">
</form>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>