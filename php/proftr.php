<?php
 ?>
<br><br>
<?php session_start() ?>
<?php
      if(!isset($_SESSION["email"])) // If session is not set then redirect to Login Page
       {
           header("Location:tourlg.php");
       }

          // echo $_SESSION["email"];

          // echo "Login Success";

          // echo "<a href='logout.php'> Logout</a> ";
?>

 <!DOCTYPE html>
 <html>
   <head>
     <!-- <meta charset="utf-8"> -->
     <title>Tourist Profile</title>

<!-- <title>W3.CSS Template</title> -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 <!-- links -->
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/reg.css">
 <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
 <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"> -->

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
</head>
<body class="w3-light-grey">
  <!-- Navbar -->
  <div class="w3-top">
  <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
  href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://localhost/easybook/home.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EASYBOOK</a>
  <a href="hometr.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">home</a>
  <a href="proftr.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">profile</a>
  <!-- <a href="notification_tour.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">notification</a> -->
  <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">log out</a> -->

  <a href="logout_tourist.php" style="float: right;" class="w3-bar-item w3-button w3-hide-small w3-hover-white">log out</a>
  </div>
<!-- </div> -->
  <!-- <h3>welcome to booking</h3> -->

  </div>
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

<br>
<h3>TOURIST'S PROFILE</h3>
  <!-- The Grid -->
  <div class="w3-row-padding">

    <!-- Left Column -->
    <div class="w3-third">

      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://www.w3schools.com/w3images/avatar_hat.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $_SESSION["email"]; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>London, UK</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ex@mail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>+254789878976</p>
          <hr>
  <!-- <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div> -->
          </div>
          <br>
    <!-- End Left Column -->
    </div>


  <!-- End Grid -->
  </div>
<?php
 $db = mysqli_connect("localhost","root","3lephantK1d","easybook");
// $sql = "SELECT email, Password FROM tourist WHERE email='$_SESSION["email"]'";

 $sql = "select * from tourist where email='june@gmail.com'";

 $result = mysqli_query($db, $sql);


 while ($row = mysqli_fetch_array($result)) {

 echo 
 "<table id='myTable'>
 <h4>Your Details</h4>
 
     <thead>
     <tr class='header'>
     <th></th>
     <th>ID</th>

     <th>Name</th>

     <th>Email</th>

     <th>Gender</th>

     <th class='header'>Nationality</th>
     </tr>
     </thead>
     <tbody>";

   while($row = $result->fetch_assoc()) {
       echo "
       <tr>
       <td><a href='delete_tr.php'><button>DELETE</button></a> </td>
       <td> {$row["touristID"]}</td>
       
       <td>{$row["touristName"]}</td>
      
       <td>{$row["email"]}</td>
       
       <td>{$row["gender"]}</td>
      
       <td>{$row["nationality"]}</td>
       </tr>

     </tbody>";

   }
   echo "</table>";
 }
 ?>
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find Us On Social Media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

   </body>
 </html>
