<style>
  #txtHint {
    color: black;
  }
</style>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/header.php'); ?>
<div>
  <h3>Search customer:</h3>
  <p>First name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>
</div>
<p>Suggestions: <span id="txtHint"></span></p>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/student046/dwes/footer.php'); ?>

<script>
  function showHint(str) {
    if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("txtHint").innerHTML =
        this.responseText;
    }
    xhttp.open("GET", "/student046/dwes/db/customer/db_customer_select_ajax.php?text=" + str);
    xhttp.send();
  }
</script>