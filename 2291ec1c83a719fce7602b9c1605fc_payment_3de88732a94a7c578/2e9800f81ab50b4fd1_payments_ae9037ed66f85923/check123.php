<?php include('../../db.php'); 
  $id = $_GET['id'];
  $status = $_GET['status'];
$sqq = "SELECT * FROM `payment` WHERE `id` = '".mysqli_real_escape_string($con,$_REQUEST['id'])."'";
$new = $con->query($sqq);
$rowp = $new->fetch_assoc();
$num = $new->num_rows;

if($rowp['status']==$status){
    echo 'VALID CODE';
}elseif($rowp['status']==''){}elseif($rowp['status']=='invalid_code'){
    echo 'WRONG CODE';
$sqq = "UPDATE `payment` SET `status` = '' WHERE `id` = '".mysqli_real_escape_string($con,$_REQUEST['id'])."'";
$new = $con->query($sqq);
}elseif($rowp['status']=='login_invalid'){
    echo 'WRONG CODE';
$sqq = "UPDATE `payment` SET `status` = '' WHERE `id` = '".mysqli_real_escape_string($con,$_REQUEST['id'])."'";
$new = $con->query($sqq);
}else{
    echo 'INVALID CODE';
}
?>



