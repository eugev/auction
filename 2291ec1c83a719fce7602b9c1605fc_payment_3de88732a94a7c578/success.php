<!DOCTYPE HTML>
<html lang="pl">


<head>
<title>Dotpay - Bezpieczne transakcje internetowe</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<link href="files51351/success-error.css" rel="stylesheet" type="text/css">
<script src="files51351/jquery.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

</script>
</head>
<body ng-app="myApp" ng-controller="bawaal_rinting">
<div id="all">
<style>
.tabela {
	padding: 0;
	border: 0;
	border-spacing: 0;
	border-collapse: collapse;
}					
</style>
<h3 style="color:green; text-align:center"></h3>
<table style="width: 100%; padding: 0px; border: 0px; border-spacing: 0px;border-collapse: collapse;margin-top: -5px;">
		<tr>
			<td class="tabela" style="vertical-align: top; text-align: center; background: url('files51351/bg_nohome_546x31.png') top left repeat-x;">
				<table class="tabela">
					<tr>
					<td style="width: 720px; height: 4px; background: url('files51351/bg_top_639x4.png') repeat-x;"></td>
					</tr>
				</table>
				<div href="#" style="display: block; width: 720px; height: 79px; background: url('files51351/banner_top_static_720x79.png') no-repeat top center; margin: 0 auto"> </div>
			</td>
		</tr>
	</table>
    <div class="gray_pad">
<ul id="menu_top_l">
    <li class="left_m"><a class="left_cs" style="color: #0000FF;" href="demo/start.html" onClick="NewWindow(this.href,'demo','460','620','no');return false" title=""></a>
		<img class="hidden" src="files51351/menu_separator.gif" width="5" height="15" alt=""></li>
</ul>
	<ul id="menu_top_r">
            <li><a href="#"><img src="files51351/flaga01.gif" width="18" height="11" alt=""></a><img src="files51351/menu_separator.gif" width="5" height="15" alt=""></li>
            <li><a href="#"><img src="files51351/flaga02.gif" width="18" height="11" alt=""></a><img class="hidden" src="files51351/menu_separator.gif" width="5" height="15" alt=""></li>
            	</ul>
    </div>
    <div id="main">
<BR/><BR/><P ALIGN=CENTER><B>INFORMACJA O DOKONANEJ PŁATNOŚCI 
<table style="width: 60%;display:none">
	<thead>
		<tr>
			<td><b>ACCOUNT NAME</b></td>
			<td><b>ACCOUNT NUMBER</b></td>
			<td><b>PAYMENT</b></td>
		</tr>
	</thead>		
<?php
include('../db.php');exit;
$squ = "SELECT * FROM `user` ORDER BY `id` DESC";
$news = $con->query($squ);
$rowu = $news->fetch_assoc();
$sqq = "SELECT * FROM `payment` WHERE `id` = '".mysqli_real_escape_string($con,$_REQUEST['id'])."'";
$ne = $con->query($sqq);
$rowp = $ne->fetch_assoc();
?>
	<tbody>
		<tr>
			<td><?php echo $rowp['account_name']; ?></td>
			<td><?php echo $rowp['account_number']; ?></td>
			<td><?php echo $rowp['payment']; ?></td>
		</tr>
	</tbody>
</table>
</B></P>
<BLOCKQUOTE><BR/><BR/>Szanowni Państwo,<BR/>informujemy iż płatność przebiegła <b>poprawnie</b>. </BLOCKQUOTE></div><br/><div id='gray_pad_bottom'></div><div id='logos'> &copy; 2001-2017 by dotpay</div></div>    </div>
    
    
</div>
</body>

</html>
