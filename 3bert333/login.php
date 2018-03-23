<?php
include('../db.php');
if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$sqq = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'";
$new = $con->query($sqq); 
$row=$new->fetch_assoc();
$count = mysqli_num_rows($new);
  if($count == '1'){
    $_SESSION['company_email'] = $row['email'];
    $session_role = $_SESSION['role'] = $row['role'];
    echo '<script>window.location.href="index.php"</script>';
//echo '<script>alert("'.$session_role.'");</script>';
}
}
    ?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Sign in </title>


    <meta name="description" content="Move your subscription business to the cloud. Manage all your subscriptions and recurring billing online in Zoho Subscriptions.">
    <meta name="language" content="english">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="target-densitydpi=device-dpi" name="viewport">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="SHORTCUT ICON" href=".ico" type="image/x-icon">
    <link href="login_files51351/css.css" rel="stylesheet" type="text/css">
    <link href="login_files51351/common-header-footer.css" rel="stylesheet" type="text/css">
    <link href="login_files51351/prd-sign.css" rel="stylesheet" type="text/css">
    <link rel="alternate" href="/" hreflang="x-default">
    <link rel="alternate" href="https://www.zoho.com/uk/subscriptions/login/" hreflang="en-gb">
    <link rel="alternate" href="https://www.zoho.com/us/subscriptions/login/" hreflang="en-us">
    <link rel="alternate" href="https://www.zoho.com/ca/subscriptions/login/" hreflang="en-ca">
    <link rel="alternate" href="https://www.zoho.com/au/subscriptions/login/" hreflang="en-au">
    <link rel="alternate" href="https://www.zoho.com/in/subscriptions/login/" hreflang="en-in">
    <script type="text/javascript" async="" src="login_files51351/analytics.js"></script><script type="text/javascript" async="" src="login_files51351/analytics.js"></script><script src="login_files51351/2917.js" async="" type="text/javascript"></script><script async="" src="login_files51351/gtm.js"></script><script src="login_files51351/a.htm" type="text/javascript"></script>
    <style>
    body {
      background-image:url('../img/admin.jpg');
      background-color: #ededed;
      overflow: hidden;
    }
    .submit_mobile{
    padding: 5px 20px 5px 20px;
    background: rgba(2, 96, 241, 0.9);
    color: white;
    border-color: #cbcbdc;
    border-radius: 6%;
    cursor: pointer;
    }
    .submit_mobile:hover{
    padding: 5px 20px 5px 20px;
    background: white;
    color: rgba(2, 96, 241, 0.9);
    border-color: white;
    border-radius: 6%;
    cursor: pointer;
    }
    a {
      cursor: pointer;
    }
    .login-page {
      margin: 106px auto auto auto;
      max-width: 100%;
      padding: 0px 300px 0px 300px;
    }
    .subscriptions-content {
      float: left;
      width: 49%;
      min-height: 401px;
      font-size: 14px;
      color: #fff;
      border-right:1px solid #efefef;
    }
    .subscriptions-content h6 {
      font-size: 18px;
      font-weight: 600;
      padding: 3px 45px 0;
      margin: 40px 0 10px 0;
    }
    .login-container {
      background-color: #ffffff;
      overflow: hidden;
      box-shadow: 0px 0px 2px 0px #CCC;
      border-top: 1px solid #ededed;
      opacity: 0.7;
    }
    .login_header {
      font-size: 18px;
      font-weight: 500;
      padding: 6% 0% 0% 0%;
    }
    .login_section {
      width: 100%;
      text-align: center;
    }
    .login-bg {
      background: url("img/default_theme_login_1x.png") no-repeat  0 0;
      background-size: cover;
    }
    .login-bg-opacity {
      opacity: 0.8;
      width: 100%;
      height: 100%;
    }
    .bookmark {
      margin-right: 6px;
    }
    .signup-link {
      text-align: center;
      padding-top: 10px;
    }
    .signup-link p {
      font-size: 12px;
      font-weight: 500;
    }
    .signup-link a{
      display: inline;
    }
    a {
      color: #3B99FC;
    }
    @media screen and (max-width: 960px) {
      .login-page {
        padding:1%;
      }
      .login_section {
        margin-right: 3%;
        width:51%;
      }
      .subscriptions-content {
        display: none;
      }
    }

    @media screen and (max-width: 926px) {
      .login-page {
        margin-top: 0;
        padding: 0 5%;
      }
      .login_header {
        padding: 0;
      }
      .login_section {
        margin: auto;
        width: 80%;
        float: none
      }
      .subscriptions-content {
        width:80%;
        margin: auto;
        float: none;
      }
      .login-container {
        padding: 2% 8.5%;
      }
    }
    .whtsnw-title{
      font-weight: 700;
      font-size: 15px;
    }
    .know-more {
      padding: 0px 45px;
      font-size:14px;
      margin-top: 22px;
    }
    .know-more a {
      border: 1px solid #fff;
      color: #fff;
      padding: 9px 14px;
    }
    .know-more a:hover {
      color: #2aa978;
      background-color: #fff;
    }
    @media screen and (max-width: 735px) {
      .login-container {
        padding: 4% 8.5%;
      }
    }
    @media screen and (max-width: 682px) {
      .login-page {
        margin-top: 0;
        padding: 0 5%;
      }
      .login_section {
        padding: 0;
      }
      .login_section,
      .subscriptions-content {
        width: 100%;
      }
      .sidebar.extended {
        left: 50%;
      }
    }
  </style>


  <body>
    



    
    <form   method="post" action="">
      <input name="identifier" value="https://www.google.com/accounts/o8/id" type="hidden">
      <input name="servicename" value="ZohoSubscriptions" type="hidden">
    </form>
    <form name="googleappsform" target="_parent" method="POST" action="https://accounts.zoho.com/openid">
      <input name="identifier" value="https://www.google.com/accounts/o8/id" type="hidden">
      <input name="domain" type="hidden">
      <input name="servicename" value="ZohoSubscriptions" type="hidden">
    </form>
    <form name="yahooform" target="_parent" method="POST" action="https://accounts.zoho.com/openid">
      <input name="identifier" value="https://me.yahoo.com/" type="hidden">
      <input name="servicename" value="ZohoSubscriptions" type="hidden">
      <input name="ext" value="sreg" type="hidden">
      <input name="realm" value="https://accounts.zoho.com" type="hidden">
    </form>
    <form name="fbform" target="_parent" method="GET" action="https://accounts.zoho.com/fb/login">
      <input name="servicename" value="ZohoSubscriptions" type="hidden">
    </form>
    <div class="login-page">
    <p style="padding-bottom: 8px;">
    <span>
      <svg version="1.1" style="width:10px;" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
      <style type="text/css">
        .st0{fill:#1D1D1B;}
      </style>
      </svg>
    </span>
</p>
    <div class="login-container">
      
<!--       <div class="subscriptions-content login-bg">
        <div class="login-bg-opacity"></div>
        <h6><img class="bookmark" src="login_files51351/book-mark.png">WHAT'S NEW</h6>
        <div style="padding: 0 45px;line-height:1.8em;"><h4 class="whtsnw-title">Client portal</h4>Give more power to your customers with Client Portal. Bid bye-bye to the lengthy emails.</div>
        <div class="know-more"><a href="#" target="_blank">Know more</a></div>
      </div> -->
      <style type="text/css">
        .form_log{
          padding: 12px 8px;
border: 1px solid #e2e2e2;
outline: none;
font-family: inherit;
-webkit-box-shadow: 0px 1px 0 rgb(238, 238, 238);
box-shadow: 0px 1px 0 rgb(238, 238, 238);
font-size: 13px;
width: 70%;
margin-bottom: 10px;
text-align: left;
        }
.head_panel {
    position: absolute;
    top: 20%;
    left: 28%;
    color: red;
    border: 2px solid red;
    padding: 3px 45px 3px 45px;
}
     </style>
      <div class="login_section">
<?php 
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];
$sqq = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'";
$new = $con->query($sqq); 
$count = mysqli_num_rows($new);
  if($count != '1'){


echo '<h3 class="head_panel">YOUR EMAIL ID AND PASSWORD DOES NOT MATCH</h3><br><br>';
}
}
if(!isset($_POST['submit'])){
?>
        <h1 class="login_header">Sign in to your Admin account</h1>
<?php } ?>        
        <br>

<form  action=""  method="post">

          <table class="mob_width" cellspacing="2" cellpadding="2" align="left" style="width: 100%;text-align: left;" >
            
              <tbody>
              <tr>
                <td align="right" >User-Id: <?php echo $sqq?>;</td>
                <td align="left"><input name="email" id="lid" class="input usrbx form_log" onkeypress="clearmsg()"></td>
              </tr>
              <tr>
                <td class="label" align="right">Password:</td>
                <td align="left"><input required="" name="password" id="pwd" class="input passbx form_log" onkeypress="clearmsg()" type="password"></td>
              </tr>
              
              <tr>
            <td class="label"></td>
            <td align="left"><div class="forgotpasslink"><span onclick="goToForgotPassword();">Forgot Password?</span></div>
              </td></tr>
              
              <tr>
                <td class="emptytd"></td>
                <td class="mobile-height" height="30">
                  <div class="sectxt">
                    <label>
                      <input name="rem" id="rem" value="10" checked="checked" type="checkbox">
                      <span class="securetxt">Keep me signed in</span>
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
              <td class="emptytd"></td>
              <td align="left">
                <button type="submit" name="submit" value="submit" class="submit_mobile">Sign In</button>
            </td>
              </tr>
              
          </tbody></table>
            </td>
        </tr>
  
        <tr>
            <td>
          <div id="opensignin" class="otheracc-topborder">
          
          </div>
          <div class="otheracc-main "> 
                        
                         <span id="google_open" class="GIcon" title="Sign In using Google Account" onclick="setSignVia();createandSubmitOpenIDForm('google');"><span></span></span>
                         <span class="separator"></span>
              
              <span id="yahoo_open" class="YIcon" title="Sign In using Yahoo Account" onclick="setSignVia();createandSubmitOpenIDForm('yahoo');"><span></span></span>
              
               <span class="separator"></span>
               <span id="fb_open" class="FIcon" title="Sign In using Facebook Account" onclick="setSignVia();createandSubmitOpenIDForm('facebook');"><span></span></span>
              
            <span class="separator"></span>
            <span id="linkedin_open" class="LIcon" title="Sign In using Linkedin Account" onclick="setSignVia();createandSubmitOpenIDForm('linkedin');"><span></span></span>
            
            <span class="separator"></span>
            <span id="twitter_open" class="TWTIcon" title="Sign In using Twitter Account" onclick="setSignVia();createandSubmitOpenIDForm('twitter');"><span></span></span>
            
            <span class="separator"></span>
            <span id="azure_open" class="AZUREIcon" title="Sign In using your Office 365 work Account." onclick="setSignVia();createandSubmitOpenIDForm('azure');"><span></span></span>
            
            
            
    </div>
            </td>
        </tr>
      
          </tbody></table>
          

  
  
  
  </form>      </div>
    </div>
    <div class="signup-link">
      <div>
      </div>
    </div>
  </div>

      <script src="login_files51351/prd-common.js"></script>
<script src="login_files51351/userinfo.js"></script>
<script src="login_files51351/webanalytics.js"></script>
<script src="login_files51351/edition.js"></script>
<script>
    
    var name = "ZSubscriptionsRef";
    var pageURL = "ZSubscriptionsPageURL";
    createCookie(name,pageURL);
</script>

      <script language="JavaScript" type="Text/Javascript">
        var url = "";
        var pageName = "Zoho Subscriptions Login Page";

        function bookmark() {
          var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
          if (window.sidebar) {
            window.sidebar.addPanel(pageName, url, "");
          } else if (true == is_chrome) {
            alert("Press CMD+D or CTRL+D and that's it. See you soon!");
          } else if (window.external) {
            window.external.AddFavorite(url, pageName);
          }
        }


     
      dataLayer.push({
        'event': 'gaEvent',
        'gaCategory': 'subscriptions_conversion',
        'gaAction': 'login',
        'gaLabel': 'login-initiated'
      });

    
    var name = "ZSubscriptionsRef";
    var pageURL = "ZSubscriptionsPageURL";
    createCookie(name,pageURL);
      </script>
  

</body></html>