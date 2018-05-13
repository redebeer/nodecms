</div>
<?php
if(isset($_SESSION)){ 
    if($_SESSION['logged']){echo '
        <footer class="container-fluid text-center">

        <!--Footer-->
        <footer class="page-footer text-center text-md-left font-small red pt-4 mt-4">
        <div class="container text-center">

            <p>
            '.$_SESSION['username'].' from '.$_SESSION['company'].' is logged in - <a href="logout.php">logout<a></p>
            </div>
 
    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
       <!-- © 2018 Copyright:
        <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com </a>
    </div>-->
    <!--/.Copyright-->';
        }
    }?>
</footer>
<!--/.Footer-->
<?php
require ('scripts.php');
?>
</body>
</html> 

