<?php
$current_weather = 'C:/xampp/htdocs/student046/dwes/api/accuweather/json/accuweather.json';
$accu_icons = 'C:/xampp/htdocs/student046/dwes/api/accuweather/json/accuweather_icons.json';

$json = file_get_contents($current_weather);
$json_decoded = json_decode($json, true);

$icons = file_get_contents($accu_icons);
$icons_decoded = json_decode($icons, true);

?>

<div class="d-flex">
  <img src="
  <?php
  foreach ($icons_decoded as $icon_decoded) {
    if ($json_decoded[0]['WeatherIcon'] == $icon_decoded['IconNumber']) {
      echo $icon_decoded['icon'];
    }
  }
  ?>
  " width="80px" height="80px">
  <div class="d-flex flex-column justify-content-center">
    <p class="m-0">
      <?php echo "Temperature: " . $json_decoded[0]["Temperature"]["Metric"]["Value"] . " " .  "º" . $json_decoded[0]["TemperatureSummary"]["Past6HourRange"]["Maximum"]["Metric"]["Unit"]; ?>
    </p>
    <p class="m-0">
      <?php echo "Max: " . $json_decoded[0]["TemperatureSummary"]["Past6HourRange"]["Maximum"]["Metric"]["Value"] . " " .  "º" . $json_decoded[0]["TemperatureSummary"]["Past6HourRange"]["Maximum"]["Metric"]["Unit"]; ?>
    </p>
    <p class="m-0">
      <?php echo "Min: " . $json_decoded[0]["TemperatureSummary"]["Past6HourRange"]["Minimum"]["Metric"]["Value"] . " " . "º" .  $json_decoded[0]["TemperatureSummary"]["Past6HourRange"]["Minimum"]["Metric"]["Unit"];
      ?>
    </p>
  </div>
</div>