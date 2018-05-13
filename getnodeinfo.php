<?php
session_start();
if ($_SESSION['logged'] == TRUE){
  require ('include/style.php');
  require ('include/dbsettings.php');
  echo '<br><br>';
  echo'<div class="grid">';
  echo'<div class="container text-center">';
  echo'<div class="row">';
$result = mysqli_query($db,"SELECT * FROM node where company = '".$_SESSION['company']."'");
#get date on folders
$upl_lastmod = date("F d Y H:i",filemtime('content/uploads/'.$row['name'].'/'));
$dwl_lastmod = date("F d Y H:i",filemtime('content/downloads/'.$row['name'].'/'));


while($row = mysqli_fetch_array($result))
  {
  $upl_lastmod = date("F d Y H:i",filemtime('content/uploads/'.$row['name'].'/'));
  $dwl_lastmod = date("F d Y H:i",filemtime('content/downloads/'.$row['name'].'/'));
  echo '
  <div class="col-lg-3 col-md-12 mb-3">
    <div class="card">
    <div style="background-color:white; overflow: auto;" class="clear_fix">
      <div class="view overlay">
      <img src="img/icon.png" style="width:40%; margin-left:auto;margin-right:auto;" class="card-img-top" alt="">
        <a href="#">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <div class="card-body">
      <h4 class="card-title">'.$row['name'].'</h4>
      
      <p class="card-text">location :'.$row['location'].'</p>
      <p class="card-text">status : online</p>
      <p class="card-text">last upl : '.$upl_lastmod.'</p>
      <p class="card-text">last dl : '.$dwl_lastmod.'</p>
      <p class="card-text">cpu : <iframe src="test_cpu_graph.php" frameborder="0" height="30" width="110" scrolling="no"></iframe></p>
      <p class="card-text"><a href="getnodestats.php?node='.$row['name'].'">node stats</a></p>
      <a href="upload.php?name='.$row['name'].'" class="btn btn-red">file upload</a>
    </div></div>
  </div>
 </div>
  ';
  }

?>




</div>
</div>
</div> 


    <!--model
    <div class="modal fade" id="modalUploadForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <form method="post" class="modal-content animate" action="verify.php">
                        <div class="modal-header text-center" style="background-color: rgb(187, 91, 91)">
                            <h4 class="modal-title w-100 font-weight-bold">File Upload</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">-->

                            <!--<div class="md-form mb-5">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="email" id="defaultForm-email" class="form-control validate" name="username">
                                <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                            </div>

                            <div class="md-form mb-4">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" class="form-control validate" name="password">
                                <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                            </div>-->
                            <!--
                            <iframe id="myiframe" src="jqueryupload/basic.php?upload_folder=123" style="width:350px;height:200px;" frameborder=0 scrolling="no"/>
                            </iframe>
                        </div>
                        <div class="modal-footer d-flex justify-content-center" style="background-color: rgb(187, 91, 91)">
                            <button class="btn btn-red" name="submit" scrolling="no" width="90">Login</button>
                        </div>
                    </div>
                </div>
            </div>

            <a class="nav-link" href="index.php" data-toggle="modal" data-target="#modalUploadForm">Login
                            <span class="sr-only">(current)</span>
                        </a>-->

<?php
require ('include/footer.php');
}
?>
 
 

