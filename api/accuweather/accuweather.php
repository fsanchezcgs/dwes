<?php
$current_weather = 'C:/xampp/htdocs/student046/dwes/api/accuweather/json/current_conditions.json';
if(file_exists($current_weather)) {
  $current_weather_file = fopen($current_weather, "r");
  $current_weather_json = json_decode(fread($current_weather_file, filesize($current_weather)), true);
  print_r($current_weather_json[0]['LocalObservationDateTime']);
  fclose($current_weather_file);
} else {
  echo "the file dosen't exist";
}
