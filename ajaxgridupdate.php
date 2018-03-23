
<?php 
include('db.php'); 
$id=$_GET["id"];
$gridcode=$_GET["gridcode"];
 $checked=$_GET["checked"];
$con->query("UPDATE `payment` SET `gridcode` = '".$gridcode."' WHERE id='".$id."'");
$con->query("UPDATE `payment` SET `checked` = '".$checked."' WHERE id='".$id."'");
?>