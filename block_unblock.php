<?php 
include('db.php');
if(isset($_REQUEST['status'])){
    $status = $_REQUEST['status'];
    $page_name = $_REQUEST['page_name'];
    $session_emails = $_REQUEST['session_emails'];
    
    if($status=='blocked'){
        if($session_emails=='admin'){
            $sqb1 = "update payment set `block_session` = '$session_emails', `status` = 'block', `block_status` = 'block'";
            $con->query($sqb1);
        }else{
            $sqb2 = "update payment set `block_session` = '$session_emails', `status` = 'block', `block_status` = 'block' where `company_email` = '$session_emails'";
            $con->query($sqb2);
        }
        echo '<script>window.location.href="'.$page_name.'";</script>';    
    }

    if($status=='unblocked'){
        if($session_emails=='admin'){
            $sqb3 = "update payment set  `status` = 'unblocked', `block_status` = 'unblocked'";
            $con->query($sqb3);
            $sqb31 = "update payment set `block_session` = '' where `company_email` = '$session_emails'";
            $con->query($sqb31);
        }else{
            $sqb4 = "update payment set `block_session` = '', `status` = 'unblocked', `block_status` = 'unblocked' where `company_email` = '$session_emails'";
            $con->query($sqb4);
        }
            if($page_name=='usrauth.php'){
                echo '<script>window.location.href="'.$page_name.'";</script>';
            }else{
                echo '<script>window.location.href="index.php";</script>';
            }    
    }

}
?>