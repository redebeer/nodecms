<?php
#NOTE : this is used to compare entered creds to cress in the db
require ('include/header.php');

if(isset($_POST['submit'])){
  require ('include/dbsettings.php');
  if(isset($dbDatabase)){
   
    $usr = $_POST['username'];
    // for encrypted password 
    //$pas = hash('sha256', mysql_real_escape_string($_POST['password'])); 
         //$pas = mysqli_real_escape_string($_POST['passwd']);    
    $pas = $_POST['password'];
    echo '$usr $pas';
    $sql = mysqli_query($db,"SELECT * FROM user 
        WHERE username='$usr' AND
        password ='$pas'
        LIMIT 1");
    if(mysqli_num_rows($sql) == 1){
        $row = mysqli_fetch_array($sql);
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['company'] = $row['company'];
//        $_SESSION['lname'] = $row['last_name'];
        $_SESSION['logged'] = TRUE;
        header("Location: index.php"); // Modify to go to the page you would like
        exit;
        }else{
        header("Location: login_page.php");
        exit;
    }
  } else{
    echo '<font color="red">couldnt find dbsettings file';
  }
}else{    //If the form button wasn't submitted go to the index page, or login page
    echo $_POST['username'];
    echo $_POST['password'];
    echo $_POST['submit'];
  header("Location: index.php");    
    exit;
}
?> 
