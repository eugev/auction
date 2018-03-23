<?php include('../db.php'); 
 if(!isset($_SESSION['company_email'])){
echo '<script>window.location.href="logout.php"</script>';
}else{
    $session_email = $_SESSION['company_email'];
    $session_role = $_SESSION['role'];
}


if($session_role='admin'){
$sqp1 = "SELECT * FROM `payment` ORDER BY `id` ASC";
$newp = $con->query($sqp1);
}else{
$sqp = "SELECT * FROM `payment` WHERE `company_email` = '$session_email' ORDER BY `id` ASC";
$newp = $con->query($sqp);
}
$prd = $newp->fetch_assoc();
$payment_id = $prd['id']; 
?>
     
