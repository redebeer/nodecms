<?php
require ('include/header.php');
#main landing page

session_start();
if ($_SESSION['logged'] == TRUE){
    require ('include/style.php');
    echo'
    <h3>Total Nodes</h3><br>
    <div class="container">

        <!--Grid row-->
        <div class="row">';

    require ('include/graphs.php');
    echo'</div></div>';

    require ('include/countnodes.php');
    echo'<br>';

    #link for testing purpose, yet to finalize placement and format
    echo'<a href="getnodeinfo.php">Get All Node Info</a></br>'; 
    require ('include/footer.php');

} else {

    header("Location: login_page.php");
    exit;
}
?> 

