<?php  session_start();  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WELCOME | EASYBOOKING</title>

    <!-- links -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="css/admin.css"> -->

    <link rel="stylesheet" type="text/css" href="css/home.css">

  </head>
  <body>
    <br><br>
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://localhost/easybook/home.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EASYBOOK</a>
  <a href="indexa.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">home</a>
   <a href="viewtr.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">view tourist</a>
    <a href="viewhs.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">view hosts</a>
    <a href="viewho.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">view houses</a>
    <a href="viewbk.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">View Booking</a>
    <a href="viewpy.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">view paymet</a>
  <!-- <a href="php/viewhs.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">view hosts</a> -->
  <a href="logout_host.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">logout</a>
</div>
</div>

<!--  -->

<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:adminlg.php");
       }

          echo $_SESSION['use'];

          // echo "Login Success";

          // echo "<a href='logout.php'> Logout</a> ";
?>

<h3>ADMINISTRATION PORTAL</h3>  

  </body>
</html>
