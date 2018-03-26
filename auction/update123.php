<?php
include ('../db.php');
include_once('../utils.php');


$userip = get_client_ip_env();
$useragent = htmlspecialchars($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');

$sqlup = "UPDATE `auctions` SET `page_status` = 'main_page', `userip` = '$userip', `useragent` = '$useragent' WHERE `payment_id`='$payment_id' AND `id`='$auction_id'";
$con -> query($sqlup);
?>