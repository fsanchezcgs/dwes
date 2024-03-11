<?php
$url = "http://dataservice.accuweather.com/currentconditions/v1/305482?apikey=T2UV4TPGQGS5IGWEEKABCK45n9pyh1HQ&details=true";
$json = file_get_contents($url);
$json_decoded = json_decode($json, true);
$current_time = date("Y-m-d");

copy($url, $_SERVER['DOCUMENT_ROOT'] . "/student046/dwes/api/accuweather/json/accuweather.json");
copy($url, $_SERVER['DOCUMENT_ROOT'] . "/student046/dwes/api/accuweather/json/accuweather_" . $current_time . ".json");

header('Location: /student046/dwes/index.php');
