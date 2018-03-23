<?php include('../db.php'); 

 $payment_id = $_GET['payment_id'];
 $name = $_GET['name'];
 $status = $_GET['status'];
$sqp = "UPDATE `payment` SET `status` = '$status' WHERE `id` = '".$_GET['payment_id']."'";
$newp = $con->query($sqp);

$sss = "SELECT * FROM `payment` WHERE `id` = '".$_GET['payment_id']."'";
$new = $con->query($sss);
$rows = $new->fetch_assoc();
if($rows['status']=='aproove'){
	echo 'aproove';
}
?>
