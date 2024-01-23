<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/header.php'); ?>
<head>
  <style>
    h5 {
      color: black;
    }
  </style>
<script>
function showHint() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  let jsonMao = <?php echo file_get_contents("http://dataservice.accuweather.com/currentconditions/v1/2-305482_1_AL?apikey=T2UV4TPGQGS5IGWEEKABCK45n9pyh1HQ") ?>;
  console.log(jsonMao);
}
</script>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="button" value="JSON" id="fname" name="fname" onclick="showHint()">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/student046/dwes/footer.php'); ?>