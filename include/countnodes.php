<?php
require ('include/header.php');
require ('include/dbsettings.php');
//if ($result = $db->query(
//$result = mysqli_query($db,"SELECT count(*) FROM node where company = \'". $_SESSION['company']."\'");
//echo "<table border='1'>
//<tr>
//<th>nodes</th>
//</tr>";
if($result = mysqli_query($db,"SELECT * FROM node where company = '".$_SESSION['company']."'")){
      /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

  //  echo "<tr>";
    //echo "<td><a href='viewnodes.php'>". $row_cnt ."</a></br></td>";
    //echo "</tr>";
    /* close result set */
    mysqli_free_result($result);
}
//echo "</table>";

//build session variables for node counts
$_SESSION['total_nodes']=$row_cnt;
$_SESSION['offline_nodes']=3;
echo $_SESSION['total_nodes']." nodes total , ".$_SESSION['offline_nodes']." offline<br>";

/* close connection */
mysqli_close($db);
?>