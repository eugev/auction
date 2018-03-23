<?php 
include('db.php');
$email = $_GET['email'];
$role = $_GET['role'];
echo $value = $_GET['value'];


if($value == 'on'){
if($role=='admin' && $value=='on'){
echo $sql = "update `payment` set `checkbox` = 'on'";
$con->query($sql);
}else{
$sql = "update `payment` set `checkbox` = 'on' where `company_email` = '$email'";
$con->query($sql);
}
}else{
if($role=='admin' && $value=='on'){
echo $sql = "update `payment` set `checkbox` = 'off'";
$con->query($sql);
}else{
$sql = "update `payment` set `checkbox` = 'off' where `company_email` = '$email'";
$con->query($sql);
}
    
}
?>