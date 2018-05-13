<?php
session_start();
if ($_SESSION['logged'] == TRUE){


  require ('include/style.php');
/*
#NOTE : still have to dev a function and or script to move uploaded file,save info , upload to site, and email client with status of uploaded file
#also still have to work on making this more presentable , drag and drop"able" with statusbar
#this funtionality requires a folder to exist based on node name

#moet nog die file upload na spesifieke directory toe skuif en script skryf om actual upload en notification te hanteer, as file upload na n folder toe skryf wat id kan word


if (isset($_GET["name"])) {
    echo "get name isset ".$_GET["name"]."";
    $_SESSION["upl_dir"]=$_GET["name"];}

if (isset($_SESSION["upl_dir"])) {
    echo "<br>session upldir is ".$_SESSION["upl_dir"]."";
    }
*/


  if(!empty($_FILES['uploaded_file']))
  {
    $path = 'content/uploads/'.$_GET['folder'].'';
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }else{

    echo'
    <br><br>
    <div container>
        <form enctype="multipart/form-data" action="upload.php?folder='.$_GET["name"].'/" method="POST">
        <p>Upload your file</p>
        <p><input style="text-align:center" type="file" name="uploaded_file"></input></p></br>
        <input type="submit" value="Upload"></input>
      </form>
      
      </div>
      ';

  }

  require ('include/footer.php');
}
?>

