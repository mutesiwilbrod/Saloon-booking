<?php
if (isset($_GET['logout'])){
    // echo "hello";
session_start();
session_unset();
session_destroy();
header('location:index.php');
exit;
}
?>