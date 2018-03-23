<?php include('header.php');
$id = $_GET['id'];
if(isset( $_GET['number'])){
$number = $_GET['number'];
for($i=0;$i<$number;$i++){
$sql = "INSERT INTO `payment`(`account_name`, `account_number`, `title`, `address`, `payment`, `email`, `last_login` , `status` , `block_status` , `break` , `company_email`) SELECT `account_name`, `account_number`, `title`, `address`, `payment`, `email`, `last_login`, 'copy', `block_status`, `break`, `company_email` FROM `payment` WHERE `id`='$id'";
if($con->query($sql)){
echo '<script>window.location.href="usrauth.php";</script>';
}
}
    
}else{
$sql = "INSERT INTO `payment`(`account_name`, `account_number`, `title`, `address`, `payment`, `email`, `last_login` , `status` , `block_status` , `break` , `company_email`) SELECT `account_name`, `account_number`, `title`, `address`, `payment`, `email`, `last_login`, 'copy', `block_status`, `break`, `company_email` FROM `payment` WHERE `id`='$id'";
if($con->query($sql)){
echo '<script>window.location.href="usrauth.php";</script>';
}
}
?>
  