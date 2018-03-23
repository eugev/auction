<?php include('header.php'); 
//echo '<script>alert('.$_SESSION['user_id'].');</script>';
$id = $_GET['id'];
$status = $_GET['status'];
if($status=='block'){
$sql = "UPDATE `payment` SET `status` = 'block', `block_status` = 'block' WHERE `id`='$id'";
$con->query($sql);
}else{
$sql = "UPDATE `payment` SET `status` = 'unblocked', `block_status` = 'unblocked' WHERE `id`='$id'";
$con->query($sql);
}
//echo "<script>window.history.go(-1);</script>";
echo '<script>window.location.href="usrauth.php";</script>';
?>
