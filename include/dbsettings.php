<?php
$dbHost = "localhost";        //Location Of Database usually its localhost
    $dbUser = "redebeer";            //Database User Name
    $dbPass = "rdb1003";            //Database Password
    $dbDatabase = "shep_node";    //Database Name
$db=mysqli_connect($dbHost,$dbUser,$dbPass,$dbDatabase);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//$dbh = new PDO("MySQL:host=$dbHost;dbname=$dbDatabase", $dbUser, $dbPass);

?> 
