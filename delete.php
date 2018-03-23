<?php include('db.php'); 
$id = $_REQUEST['id'];
$table_name = $_REQUEST['table_name'];
$page_name = $_REQUEST['page_name'];

$del = "DELETE FROM `$table_name` WHERE `id` = '$id'";
$con->query($del);
echo '<script>window.location.href="'.$page_name.'";</script>';
?>

