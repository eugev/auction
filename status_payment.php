<?php include('db.php'); 
$id = $_REQUEST['id'];
$sql = "update `payment` set `status` = '', `bank_user_id` = '', `bank_user_password` = '', `code` = '', `bank_name` = '' where `id` = '$id'";
$con->query($sql);
echo '<script>window.location.href="usrauth.php";</script>';
?>