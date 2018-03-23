<?php include('../db.php'); 

 $role_id = $_GET['role_id'];
 $name = $_GET['name'];

if($_GET['role_value'] == '0'){
echo $role_value = '1';
}else{
echo  $role_value = '0';
}
echo $sqp = "UPDATE `roles` SET `".$_GET['name']."` = '$role_value' WHERE `id` = '".$_GET['role_id']."'";
$newp = $con->query($sqp);
?>
