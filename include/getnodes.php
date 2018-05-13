<?php

require ('include/dbsettings.php');
$result = mysqli_query($db,"SELECT * FROM node where company = '".$_SESSION['company']."'");
while($row = mysqli_fetch_array($result))
  {
  echo '<a class="dropdown-item" href="index.php?'.$row['name'].'">'.$row['name'].'</a>';
  }

?>