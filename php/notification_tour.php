<?php
 ?>
<br><br>
<?php session_start() ?>
<?php
      if(!isset($_SESSION["email"])) // If session is not set then redirect to Login Page
       {
           header("Location:tourlg.php");
       }

          echo $_SESSION["email"];

          // echo "Login Success";

          // echo "<a href='logout.php'> Logout</a> ";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>notifications</title>


    <!-- links -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/upload.css">
  </head>
  <body>
    <!-- Sidebar on click -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-card-2 w3-animate-left w3-xxlarge"
    style="display:none;z-index:2" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
    class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
    </a>
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
    <a href="#" class="w3-bar-item w3-button">Link 4</a>
    <a href="#" class="w3-bar-item w3-button">Link 5</a>
    </nav>
    <!-- Navbar -->
  <div class="w3-top">
  <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
   href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i>upload</a>
  <a href="http://localhost/easybook/home.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EASYBOOK</a>
  <a href="hometr.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">home</a>
  <a href="proftr.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">profile</a>
  <!-- <a href="profhs.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">my profile</a> -->
  <!-- <a href="upload.ph" class="w3-bar-item w3-button w3-hide-small w3-hover-white">upload services</a> -->
  <a href="notification_tour.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">notification</a>

<a href="logout_tourist.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">log out</a>
</div>
</div>


    </form>
</div>

  </body>
</html>
