<?php 
include('db.php');
if(isset($_REQUEST['status'])){
    $status = $_REQUEST['status'];
    $page_name = $_REQUEST['page_name'];
    $session_emails = $_REQUEST['session_emails'];
    
    if($status=='on'){
            $sqb1 = "update payment set `break` = 'on' where `company_email` = '$session_emails'";
            $con->query($sqb1);
        echo '<script>window.location.href="'.$page_name.'";</script>';    
    }
    if($status=='off'){
            $sqb2 = "update payment set `break` = 'off' where `company_email` = '$session_emails'";
            $con->query($sqb2);
        echo '<script>window.location.href="index.php";</script>';
    }


}
?>