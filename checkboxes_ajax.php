<?php 
include('db.php');
    $id = $_GET['id'];
    $value = $_GET['value'];
               $sqb = "select checkbox from payment where `id` = '$id'";
            $new = $con->query($sqb);
            $row = $new->fetch_assoc();
            if($row['checkbox'] == "on"){
            $sqb1 = "update payment set `checkbox` = 'off' where `id` = '$id'";
            $con->query($sqb1);
        }else{
            $sqb1 = "update payment set `checkbox` = 'on' where `id` = '$id'";
            $con->query($sqb1);
        }
?>