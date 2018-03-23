<?php 
include('db.php');
$ss_em =  $_GET['session_email'];
$ss_role =  $_GET['session_role'];
if($ss_role=='admin'){
$sqw1 = "UPDATE `payment` SET `beep` = '0'";
$new = $con->query($sqw1);
}else{
$sqw2 = "UPDATE `payment` SET `beep` = '0' WHERE `company_email` = '$ss_em'";
$new = $con->query($sqw2);
}
?>