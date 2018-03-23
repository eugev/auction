<?php include('../db.php'); 

 $payment_id = $_GET['payment_id'];
 $name = $_GET['name'];

$sqp = "UPDATE `payment` SET `status` = 'login_aproove' WHERE `id` = '".$_GET['payment_id']."'";
$newp = $con->query($sqp);

$sss = "SELECT * FROM `payment` WHERE `id` = '".mysqli_real_escape_string($con,$_GET['payment_id'])."'";
// echo $sss;exit();
$new = $con->query($sss);
$rows = $new->fetch_assoc();
if($rows['status']=='aproove'){
	echo 'aproove';
}
?>
