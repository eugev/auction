<?php

session_start();


$con = new mysqli("localhost", "dotpay","55cykablyat","dotpay_fr_dotpay" );
//$con = new mysqli("localhost", "root","root","auction" );

//$con = new mysqli("localhost", "root","","dotpay_fr_dotpay" );
	
if ($con->connect_error){
	die("connection failed: " . $con->connect_error);  
}
error_reporting(1);



if(isset($_SESSION['company_email'])){
    $session_email = $_SESSION['company_email'];
    $session_role = $_SESSION['role'];
	$sql = "SELECT * FROM `admin` WHERE `email` = '$session_email'";
	$new=$con->query($sql);
	$session_row = $new->fetch_assoc();
}


?>
