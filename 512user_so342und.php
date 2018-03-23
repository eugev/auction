<?php 
include('db.php');
$ss_em =  $_GET['session_email'];
$ss_role =  $_GET['session_role'];
if($ss_role=='admin'){
$sss1 = "SELECT * FROM `payment` WHERE `beep` = '1'";
$new = $con->query($sss1);
}else{
$sss2 = "SELECT * FROM `payment` WHERE `beep` = '1' AND `company_email` = '$ss_em'";
$new = $con->query($sss2);
}
$num = $new->num_rows;
if($num >= '1'){
echo  $num;
}
?>
