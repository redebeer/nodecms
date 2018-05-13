<?php
require ('include/header.php');
//unset($_SESSION['logged']);
session_start();
if ($_SESSION['logged'] == TRUE){
echo 'good bye';
unset($_SESSION['logged']);
header("Location: login_page.php");
   exit;
}

require ('include/footer.php');

?>
