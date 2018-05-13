<?php
date_default_timezone_set('Africa/Johannesburg');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Node CMS</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="css/mdb/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="css/mdb/mdb.min.css" rel="stylesheet">
<!-- Your custom styles (optional) -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  

<?php
if(isset($_SESSION)){ 
  if($_SESSION['logged']){
      echo '<link href="css/mdb/style.css" rel="stylesheet">';
      }
      }else{echo '<link href="css/mdb/login.css" rel="stylesheet">';}
      ?>


<!--<link rel="stylesheet" href="css/upload/style.css">-->
<link rel="stylesheet" href="css/upload/jquery.fileupload.css">
</head>
<body>


<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark red">
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Node CMS</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <?php
            if(isset($_SESSION)){ 
                if($_SESSION['logged']){echo '
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>-->

                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Node list</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink" style="background-color: rgb(250, 76, 76)">
                                <a class="dropdown-item" href="getnodeinfo.php">all</a>
                                ';
                                require ('include/getnodes.php');
                            echo '</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>';
                    
                }
                    
            } else {
                echo '
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php" data-toggle="modal" data-target="#modalLoginForm">Login
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
             

                </ul>';}
            ?>
            <!-- Links -->

            <!--<form class="form-inline">
                <div class="md-form mt-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>-->
        </div>
        <!-- Collapsible content -->
    </div>
</nav>
<!--/.Navbar-->        
<div class="container text-center">    

   

  
