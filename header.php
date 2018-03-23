<?php include('db.php'); 
 if(!isset($_SESSION['company_email'])){
echo '<script>window.location.href="logout.php"</script>';
}else{
    $session_email = $_SESSION['company_email'];
    $session_role = $_SESSION['role'];
}

if($session_role=='admin'){
$sqp1 = "SELECT * FROM `payment` ORDER BY `id` ASC";
$newp = $con->query($sqp1);
}else{
$sqp = "SELECT * FROM `payment` WHERE `company_email` = '$session_email' ORDER BY `id` ASC";
$newp = $con->query($sqp);
}
$prd = $newp->fetch_assoc();
$payment_id = $prd['id']; 

/**
 * Suppose, you are browsing in your localhost 
 * http://localhost/myproject/index.php?id=8
 */
function getBaseUrl() 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 
    
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 
    
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    
    // return: http://localhost/myproject/
    return $protocol.$hostName.$pathInfo['dirname']."/";
}

function delete_files($target) {
  if(is_dir($target)){
      $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned
      
      foreach( $files as $file )
      {
          delete_files( $file );      
      }
    
      rmdir( $target );
  } elseif(is_file($target)) {
      unlink( $target );  
  }
}
?>

?>
<!DOCTYPE html>
<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="zsm/config/environment" content="">

    <link href="https://d1ol71k9tej82b.cloudfront.net/zsm/assets/images/favicon.ico" rel="shortcut icon">
    <!-- <link href="./dssse3_files51351/vendor-345d4048bc35717a182f25a40da55c78.css" rel="stylesheet" type="text/css"> -->
    <link href="./dssse3_files51351/zsm-af0a019e4971711da1d6cef2f2121f6c.css" rel="stylesheet" type="text/css">
    <!-- Google web font -->
    <link href="./dssse3_files51351/css" rel="stylesheet" type="text/css">
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- -------------------------MINION CSS ------------------------------ -->

    <link href="css/dscere.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- -------------------------MINION CSS ------------------------------ -->

    <title>Dashboard </title>
  <script type="text/javascript" src="https://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">

//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>    
    <style id="custom-theme"></style>
    </head>
    <body class="ember-application" style="overflow-x: hidden;">
     

    <div class="warn-email-confirm">
      <div class="hidden-print banner-admin ">
      </div>

      <div class="top-band hidden-print" style="top: 0px;">
        
        <div class="pull-left">
          <div class="dropdown zf-products">
            <a data-toggle="dropdown" class="dropdown-toggle" style="padding: 0px;">
            <img src="img/acc_img.png" style="width: 170px;height: 45px; padding: 0px; padding-left: 0px; width: 100%;">      
            </a>
            <div class="dropdown-menu container" style="display:none">
              <span class="arrow"></span>
              <div class="row other-app-container">
                  <div class="col-md-4 other-app-item">
                    <a href="" target="_blank">
                      <div class="zf-logo books"></div>
                      <div class="zf-title">Zoho Books</div>
                    </a>
            </div>
            <div class="col-md-4 other-app-item">
              <a href="#" target="_blank">
                <div class="zf-logo expense"></div>
                <div class="zf-title">Zoho Expense</div>
              </a>
            </div>
            <div class="col-md-4 other-app-item">
              <a href="#" target="_blank">
                <div class="zf-logo inventory"></div>
                <div class="zf-title">Zoho Inventory</div>
              </a>
            </div>
            <div class="col-md-4 other-app-item">
              <a href="#" target="_blank">
                <div class="zf-logo checkout"></div>
                <div class="zf-title">Zoho Checkout</div>
              </a>
            </div>
            <div class="col-md-4 other-app-item">
              <a href="#" target="_blank">
                <div class="zf-logo invoice"></div>
                <div class="zf-title">Zoho Invoice</div>
              </a>
            </div>
        </div>
        <div class="dropdown-submenu">
          <a target="_blank" data-toggle="dropdown" class="all-apps dropdown-toggle">View All Apps →</a>
          <div class="dropdown-menu zapps">
            <div class="row">
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li class="text-muted font-xs">COMMUNICATION &amp; COLLABORATION</li>
                  <li><a href="#" target="_blank"><span class="app-icons-mail"></span>Mail</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-docs"></span>Docs</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-projects"></span>Projects</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-bugtracker"></span>Bugtracker</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-meeting"></span>Meeting</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-vault"></span>Vault</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-connect"></span>Connect</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-contactmanager"></span>ContactManager</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-chat"></span>Chat</a></li>
                </ul>
              </div>

              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li class="text-muted font-xs">SALES &amp; MARKETING</li>
                  <li><a href="#" target="_blank"><span class="app-icons-crm"></span>CRM</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-campaigns"></span>Campaigns</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-sites"></span>Sites</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-survey"></span>Survey</a></li>
                </ul>
                <br>
                <ul class="list-unstyled">
                  <li class="text-muted font-xs">BUSINESS PROCESS</li>
                  <li><a href="#" target="_blank"><span class="app-icons-creator"></span>Creator</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-reports"></span>Reports</a></li>
                </ul>
              </div>

              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li class="text-muted font-xs">HELP DESK &amp; CUSTOMER SUPPORT</li>
                  <li><a href="#" target="_blank"><span class="app-icons-desk"></span>Desk</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-assist"></span>Assist</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-livedesk"></span>LiveDesk</a></li>
                </ul>
                <br>
                <ul class="list-unstyled">
                  <li class="text-muted font-xs">HUMAN RESOURCES</li>
                  <li><a href="#" target="_blank"><span class="app-icons-people"></span>People</a></li>
                  <li><a href="#" target="_blank"><span class="app-icons-recruit"></span>Recruit</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    
      </div>
    </div>
    </div>
    
    <div id="ember469" class="search-field ember-view"><div id="ember478" class="dropdown open ac-dropdown ac-dp-group ember-view">  
      <div class="input-group btn-group">
        <span data-toggle="dropdown" class="input-group-addon left dropdown-toggle cursor-pointer">
          <i class="fa fa-search f11"></i> <span> <i class="caret"></i> </span>
        </span>
        <div tabindex="-1" class="auto-select ac-selected">
           <input type="text" placeholder="Search" maxlength="100" id="ember492" class="form-control ember-text-field ember-view">
        </div>
        <ul class="dropdown-menu">
          <li data-ember-action="" data-ember-action-503="503">
            <a>
              Customers
            </a>
          </li>
          <li class="text-center adv-search" data-ember-action="" data-ember-action-510="510">
            <div><a><i class="fa fa-search"></i> Advanced Search</a></div>
          </li>
        </ul>
      </div>
    
    </div>
    </div>
      
    <div class="pull-right user-pro cursor-pointer topband-arrow" data-ember-action="" data-ember-action-511="511">
      <img src="./dssse3_files51351/file" class="pull-left img-circle">
    </div>

    <div class="pull-right top-item cursor-pointer" data-ember-action="" data-ember-action-512="512">
      <i class=" icons topband-icons fa fa-question-circle-o" style="font-size: 20px"></i>
    </div>


    <div id="settings-icon" class="pull-right top-item cursor-pointer" data-ember-action="" data-ember-action-513="513">
        <i class=" icons topband-icons fa fa-cog" style="font-size: 20px"></i>
    </div>

    <div id="ember518" class="pull-right user-notification ember-view">
      <div data-ember-action="" data-ember-action-519="519">
        <span style="position:relative;" class="cursor-pointer pull-right top-item" data-ember-action="" data-ember-action-520="520">
                <i class=" icons topband-icons fa fa-bell-o" style="font-size: 20px"></i>
        </span>
      </div>
    </div>

    <div class="pull-right user-pro cursor-pointer top-item" data-ember-action="" data-ember-action-521="521">
      aafreem <span class="fa fa-angle-down" style="font-size: 18px"></span>
    </div>
    </div>

    <div id="ember530"  style="top: 51px;" class="column tab-column hidden-print ember-view">          
      <ul class="nav nav-pills nav-stacked fill">
        <li id="ember532" class="active ember-view" style="display: none;">
          <a href="dashboard.php" id="ember533" class="active ember-view"><i class="left-pane-icons fa fa-dashboard"></i> Dashboard</a>
        </li>

        <li id="ember561" class="ember-view">
          <a href="<?php if($prd['break']=='off'){ ?>payment.php?payment_id=<?php echo $payment_id; }else{ ?> payment.php <?php } ?>" id="ember562" class="ember-view"><i class="left-pane-icons fa fa-shopping-basket"></i> Payment</a>
        </li>

        <li id="ember757" class="ember-view">
          <a href="usrauth.php" id="ember758" class="ember-view"><i class="left-pane-icons fa fa-user-md"></i>User Authentication</a>
        </li>
        
        <li class="divider"></li>
        
        <li id="ember607" class="ember-view"  style="display: none;">
          <a href="customer.php" id="ember608" class="ember-view"><i class="left-pane-icons fa fa-user-o"></i>Customers</a>
        </li>

        <li id="ember650" class="ember-view" style="display: none;">
          <a href="subscriptions.php" id="ember651" class="ember-view"><i class="left-pane-icons fa fa-refresh"></i>Subscriptions</a>
        </li>

<!--         <li id="ember686" class="ember-view">
          <a href="invoices.php" id="ember687" class="ember-view"><i class="left-pane-icons fa fa-files51351-o"></i>Invoices</a>
        </li>
 -->
        <li id="ember721" class="ember-view" style="display: none;">
          <a href="events.php" id="ember722" class="ember-view"><i class="left-pane-icons fa fa-calendar-o"></i>Events</a>
        </li>      
        
        <li class="divider"></li>
<?php if($session_role=='admin'){ ?>
        <li id="ember757" class="ember-view">
          <a href="users.php" id="ember758" class="ember-view"><i class="left-pane-icons fa fa-user"></i>Middle Man</a>
        </li>
<?php } ?>
        
        <!--<li id="ember757" class="ember-view">-->
        <!--  <a href="roles.php" id="ember758" class="ember-view"><i class="left-pane-icons fa fa-ioxhost"></i>Roles</a>-->
        <!--</li>-->
        
        <li id="ember757" class="ember-view" style="display: none;">
          <a href="blog.php" id="ember758" class="ember-view"><i class="left-pane-icons fa fa-file-word-o"></i>Blog</a>
        </li>
        
        <li id="ember757" class="ember-view" style="display: none;">
          <a href="support.php" id="ember758" class="ember-view"><i class="left-pane-icons fa fa-ticket"></i>Support</a>
        </li>
        
        <li id="ember757" class="ember-view" style="display: none;">
          <a href="reports.php" id="ember758" class="ember-view"><i class="left-pane-icons fa fa-signal"></i>Reports</a>
        </li>
        <!--<li id="ember721" class="ember-view">-->
        <!--  <a href="#" id="ember722" class="ember-view"><i class="left-pane-icons fa fa-calendar-o"></i>Support</a>-->
        <!--</li>   -->
        <li id="ember757" class="ember-view">
          <a href="#" id="ember758" class="ember-view"><i class="left-pane-icons fa fa-signal"></i>Settings</a>
        </li>        
        <li id="ember650" class="ember-view">
          <a href="logout.php" id="ember651" class="ember-view"><i class="left-pane-icons fa fa-power-off"></i>Logout</a>
        </li>
      </ul>
    </div>      
