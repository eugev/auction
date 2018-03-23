<?php 

$_Hash=$_POST['Temp_Hash'];
$payment = $_POST['payment'];

include('../db.php');
$id = "112831";

if ($_Hash!="")
{	
	$sql226="SELECT * FROM `payment` WHERE signature_canvas='".$_Hash."'";
	$result226 = $con->query($sql226);
	$num_rows = mysqli_num_rows($result226 );
	if ($num_rows >= 14 || empty($payment) || !is_numeric($payment)) {
		echo "error";
	}else{
		$sql = "INSERT INTO `payment`(`account_name`, `account_number`, `title`, `address`, `payment`, `email`, `last_login` , `status` , `block_status` , `break` , `company_email`, `signature_canvas`) SELECT `account_name`, `account_number`, `title`, `address`, $payment, `email`, `last_login`, 'copy', `block_status`, `break`, `company_email`, '$_Hash' FROM `payment` WHERE `id`='$id'";
		
		if($con->query($sql)){
			$last_id = $con->insert_id;
			echo $last_id;
		}
	}
}else{
	echo "error";
}
 
?> 