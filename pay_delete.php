<?php include('header.php'); 
//echo '<script>alert('.$_SESSION['user_id'].');</script>';
$id = $_GET['id'];
$con->query("DELETE FROM `payment` WHERE `id`='$id'");
//echo "<script>window.history.go(-1);</script>";
if(isset($_GET['page'])){
$page = $_GET['page'];
echo '<script>window.location.href="'.$page.'";</script>';
}else{
echo '<script>window.location.href="payment.php?payment_id='.$payment_id.'";</script>';
}
?>
