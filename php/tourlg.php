<br><br>
<?php
session_start();
include "global.php";

if(isset($_POST["submit"])) {
// if($_POST["email"] == "admin" && $_POST["password"] == "admin@123") {
// header("Location:pages/admin.php");

 $email = $_POST["email"];
 $password = md5($_POST["password"]);
 // Querying the Employer table
$sql = "SELECT email, Password FROM tourist WHERE email='$email' AND Password='$password'";
 $result = mysqli_query($db,$sql);
 // $connection->query
 if($result->num_rows > 0) {
     $row = $result->fetch_assoc();
     $_SESSION["email"]=$email;
     $message = "<font color=#0a936c> <br/> <b> Login Success </b> </font>";
     header("Location:hometr.php");
 }else {
   echo "<font color = red><b>Your details did not match.</b></font>";
   echo "<font color = black> Try again</font>";
 }
 }

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TOURIST PORTAL</title>


  <!-- links -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/tour.css" type="text/css">
  </head>
  <body>
  <!-- Navbar -->
  <div class="w3-top">
  <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
  href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://localhost/easybook/home.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EASYBOOK</a>
</div>
</div>
<!-- <br><br> -->

<!-- <h3>SELECT USER TYPE</h3> -->
        <form class="home" action="index.html" method="post">
          <button class="w3-button w3-red w3-border w3-border-black" id="bt" type="button" name="tourist" onclick="index.html">TOURIST</button>
          <script type="text/javascript">
            document.getElementById("bt").onclick = function () {
            location.href = "tourlg.php";
            };
          </script>
          <button class="w3-button w3-red w3-border w3-border-black" id="bt1" type="button" name="host" onclick="index.html">HOST</button>
            <script type="text/javascript">
              document.getElementById("bt1").onclick = function () {
              location.href = "hostlg.php";
              };
            </script>
        <button class="w3-button w3-red w3-border w3-border-black" id="bt2" type="button" name="admin" onclick=" ">ADMIN</button>
            <script type="text/javascript">
              document.getElementById("bt2").onclick = function () {
              location.href = "adminlg.php";
              // indexa.html
              };
            </script>
          <!-- <input type="button" value="try" onclick="window.open('http://www.website.com/page')" /> -->
        </form>

<!-- <div id="Sign-In"> -->
  <div class="lg">
<fieldset>
  <legend class="w3-center w3-text-white"  >TOURIST LOG-IN</legend>
<form method="POST" action="" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
  <div class="w3-row w3-section">
  <div class="w3-rest">
User <br><input class="w3-input w3-border" type="email" name="email" size="40">
</div>
</div>
<div class="w3-row w3-section">
    <div class="w3-rest">
Password<input  class="w3-input w3-border" type="password" name="password" size="40">
</div>
</div>
<input class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" id="button" type="submit" name="submit" value="Log-In">
</form>
</fieldset>
</div>


  <div class="lg">
<fieldset>
  <legend class="w3-center w3-text-black">TOURIST SIGN UP</legend>
<form method="POST" action="reg.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<div class="w3-row w3-section">
  <div class="w3-rest">
Name: <input class="w3-input w3-border" type="text" name="name">
</div>
</div>

Gender:
<input  type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female

<div class="w3-row w3-section">
  <div class="w3-rest">
Email: <input class="w3-input w3-border" type="text" name="email" required>
</div>
</div>
<div class="w3-row w3-section">
  <div class="w3-rest">
Nationality:<input type="text" name="nationality" required>
</div>
</div>

<div class="w3-row w3-section">
  <div class="w3-rest">
Password: <input type="password" name="pass">
</div>
</div>
<div class="w3-row w3-section">
  <div class="w3-rest">
Confirm Password: <input type="password" name="cpass">
</div>
</div>

<input class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" id="button" type="submit" name="submit" value="Sign-Up">

</form>
</fieldset>
</div>
<!-- </div> -->
  </body>
</html>
