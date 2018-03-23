<?php
include('db.php');
session_start();
session_unset();
session_destroy();
echo '<script>window.location.href="3bert333/login.php"</script>';
 ?>