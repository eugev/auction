<?php
include('db.php');
include('YH0uW3ecaRHG16ld4waY.php');
$dates = date('Y-m-d');
$date = date('Y-m-d');
$date = new DateTime($date);

$date->modify('+1 day');
$nextdate = $date->format('Y-m-d');

if(isset($_GET['ids'])){
  $payment_id = $_GET['ids'];
if($session_role=='admin'){
$sqs = "SELECT * FROM `payment` WHERE `last_login` < '10'";
$ne = $con->query($sqs);
}else{
$sqs = "SELECT * FROM `payment` WHERE `last_login` < '10' AND `company_email` = '$session_email'";
$ne = $con->query($sqs);
}
//echo $rowcount=mysqli_num_rows($ne);
$active=$ne->num_rows;
//echo '<script>alert('.$rowcount.');</script>';


if($session_role=='admin'){
$sqs1 = "SELECT * FROM `payment` WHERE `last_login` > '10'";
$ne1 = $con->query($sqs1);
}else{
$sqs1 = "SELECT * FROM `payment` WHERE `company_email` = '$session_email' AND `last_login` > '10'";
$ne1 = $con->query($sqs1);
}
$inactive=$ne1->num_rows;

if($session_role=='admin'){
$sqs2 = "SELECT * FROM `payment` WHERE `date_time` BETWEEN '$dates' AND '$nextdate'";
$ne2 = $con->query($sqs2);
}else{
$sqs2 = "SELECT * FROM `payment` WHERE `company_email` = '$session_email' AND `date_time` BETWEEN '$dates' AND '$nextdate'";
$ne2 = $con->query($sqs2);
}
$total=$ne2->num_rows;
  ?>
<style>
.fontss{
font-size:14px;font-weight:bolder;
}
.bord{
border-bottom:1px solid #ccc;
}
</style>

           <div class="row list-header"  id="heres" style="margin-left: 0px">
<div style="width: 100%;padding-top: 20px">
  <div style="width: 50%;float: left;">
    <div style="width: 50%;float: left;">
    <p class="fontss bord">Total Online: </p>
    <p class="fontss bord">Total Inactive: </p>
    <p class="fontss bord">Total Today: </p>
    </div>
    <div style="width: 50%;float: left;">
    <p class="fontss"><?php echo $active; ?></p>
    <p class="fontss"><?php echo $inactive; ?></p>
    <p class="fontss"><?php echo $total; ?></p>
    </div>
  </div>
  <div style="width: 50%;float: left;">
    <p class="fontss bord">IP Online</p>
<?php
     if($_GET['session_role']=='admin'){
$sqs = "SELECT * FROM `payment` WHERE `last_login` < '10'";
$ne = $con->query($sqs);
}else{
$sqs = "SELECT * FROM `payment` WHERE `last_login` < '10' AND `company_email` = '$session_email'";
$ne = $con->query($sqs);
}
$active=$ne->num_rows;
if($active>0){
while($row_pp=$ne->fetch_assoc()){
?>
    <p  class="fontss bord"><b><?php echo $row_pp['ip'].'/'.URL_directory1.'index.php?id='.$row_pp['id'].'<br>'; ?></b></p>
<?php } } } ?>    
  </div>
</div>
          </div>