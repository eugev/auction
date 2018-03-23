<?php

$IP = $_SERVER['REMOTE_ADDR'];

$host = gethostbyaddr($IP);

echo $host;

$return_value = "Rachunek";
if (strpos($host, 'play') !== false) {
$return_value = "Rachunek PLAY";
}
else if (strpos($host, 'centertel') !== false) {
$return_value = "Rachunek ORANGE";
}
else if (strpos($host, 't-mobile') !== false) {
$return_value = "Rachunek T-MOBILE";
}
else if (strpos($host, 'plus') !== false) {
$return_value = "Rachunek PLUS";
}
$title = $return_value;

echo '<br>title: '.$title;

?>