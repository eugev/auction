<?php
$IP = $_SERVER['REMOTE_ADDR'];

$User_Agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0';
$Accept = 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
$Accept_Language = 'en-US,en;q=0.5';
$Referer = 'http://whatismyipaddress.com/';
$Connection = 'keep-alive';

$HTML = file_get_contents("http://whatismyipaddress.com/ip/$IP", false, stream_context_create(array('http' => array('method' => 'GET', 'header' => "User-Agent: $User_Agent\r\nAccept: $Accept\r\nAccept-Language: $Accept_Language\r\nReferer: $Referer\r\nConnection: $Connection\r\n\r\n"))));

$host = gethostbyaddr($IP);

preg_match_all('/<th>(.*?)<\/th><td>(.*?)<\/td>/s', $HTML, $Matches, PREG_SET_ORDER);

$ISP = $Matches[3][2];
$City = $Matches[11][2];
$State = $Matches[10][2];
$ZIP = $Matches[15][2];
$Country = $Matches[9][2];

$return_value = "error";
if (strpos($host, 'play') !== false) {
	$return_value = "PLAY";
}
else if (strpos($host, 'centertel') !== false) {
	$return_value = "ORANGE";
}
else if (strpos($host, 't-mobile') !== false) {
	$return_value = "T-MOBILE";
}
else if (strpos($host, 'plus') !== false) {
	$return_value = "PLUS";
}

echo $return_value;
?>

