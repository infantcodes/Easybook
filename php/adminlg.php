<br><br><br>
<?php session_start(); ?>

<?php

if(isset($_SESSION['use']))   // Checking whether the session is already there or not if
                              // true then header redirect it to the home page directly
 {
    header("Location:indexa.php");
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

      if($user == "admin001" && $pass == "001Admin")  // username is  set to "admin001"  and Password
         {                                   // is 001Admin by default

          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("viewtr.php","_self");
         </script>';            //  On Successful Login redirects to indexa.php
         echo "<br><br>";

        }

        else
        {
            echo "<font color=red>Invalid UserName or Password</font>.";
            echo "<font color=red> Try again!</font>";
            echo "<br>"."<br>";
        }
}
 ?>


<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <title>ADMIN LOGIN| Welcome</title>


    <!-- links -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="../css/admin.css">
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


<!-- <h3>welcome to booking</h3> -->
<div class="bk">
    <!-- <h2>LOG IN</h2> -->
    <!-- testing reg code -->
    <fieldset style="width:30%"><legend>ADMIN LOG IN</legend>
    <table border="0">
    <form method="POST" action="" >
    <tr>
    <td>Username</td><td> <input placeholder="username" type="text" name="user"></td>
    </tr>
    <tr>
    <td>password</td><td> <input placeholder="password" type="password" name="pass" required></td>
    </tr>
    <tr>
    <td><input id="button" type="submit" name="login" value="login"></td>
    </tr>
    </form>
    </table>
  </fieldset>
</div>

  </body>
</html>
