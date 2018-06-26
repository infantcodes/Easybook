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




 <br><br>
 <!DOCTYPE html>
 <html>
   <head>
     <title>BOOKING |Welcome</title>
     <meta charset="utf-8">


 <!-- links -->
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

 <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<link rel="stylesheet" href="./css/tour.css">


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>

   </head>
   <body>

 <div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
 <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
 href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
 <a href="http://localhost/easybook/home.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EASYBOOK</a>
 <a href="hometr.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">home</a>
 <a href="proftr.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">profile</a>
 <!-- <a href="notification_tour.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">notification</a> -->
 <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">log out</a> -->

 <a href="logout_tourist.php" id="lg" style="float: right;" class="w3-bar-item w3-button w3-hide-small w3-hover-white">log out</a>

</div>
    

 </div>
<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search house by description' title='Type in a name'>
<style>
  input[type=text] {
    width: 130px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
    width: 100%;
}
</style>
<!-- <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script> -->
  <div class="w3-row-padding">
    <form action="book.php" method="post">
    <div class="w3-col m3">
      <label><i class="fa fa-male"></i> <i class="fa fa-female"></i>Tourist ID</label>
      <input  class="w3-input w3-border" type="number" placeholder="Tourist ID" name="id">
      <!-- <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY"> -->
    </div>
    <div class="w3-col m3">
      <label><i class="fa fa-hotel"></i> House ID</label>
      <input class="w3-input w3-border" placeholder="houseID" type="number" name="hse">
      <!-- <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY"> -->
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-calendar-o"></i> Check In</label>
      <input class="w3-input w3-border" type="date" name="start" placeholder="DD MM YYYY">
      <!-- <label><i class="fa fa-male"></i> Adults</label> -->
      <!-- <input class="w3-input w3-border" type="number" placeholder="1"> -->
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-calendar-o"></i> Check Out</label>
      <input class="w3-input w3-border" type="date"  name="end" placeholder="DD MM YYYY">
      <!-- <input class="w3-input w3-border" type="number" placeholder="0"> -->
      <!-- <label><i class="fa fa-child"></i> Kids</label> -->
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-book"></i> Book</label>
      <button type="submit" name="book" value="book" class="w3-button w3-block w3-black">Book</button>
    </div>
    </form>
  </div>

  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="https://www.w3schools.com/w3images/room_single.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Single Room</h3>
        <h6 class="w3-opacity">From $99</h6>
        <p>Single bed</p>
        <p>House No: 9</p>
        <p>15m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button href="book.php" class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://www.w3schools.com/w3images/room_double.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Double Room</h3>
        <h6 class="w3-opacity">From $149</h6>
        <p>Queen-size bed</p>
        <p>House No: 14</p>
        <p>25m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://www.w3schools.com/w3images/room_deluxe.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Deluxe Room</h3>
        <h6 class="w3-opacity">From $199</h6>
        <p>King-size bed</p>
        <p>House No: 12</p>
        <p>40m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Choose Room</button>
      </div>
    </div>
    <?php

  // echo "Welcome";
  $db = mysqli_connect("localhost","root","3lephantK1d","easybook");

  $sql = "select * from house";

  $result = mysqli_query($db, $sql);


  while ($row = mysqli_fetch_array($result)) {
   echo "<div class='w3-third w3-margin-bottom'>";

          echo "<img style='width:100%' src ='".$row['imagepath']."' >";

          echo "<p> houseID: ".$row['houseID']."</p>";
          echo "<h6 class='w3-opacity'> price: ".$row['price']."</h6>";   

      echo "<div w3-container w3-white'>";
          echo "<p> Description: ".$row['description']."</p>";
          echo "<p> Location: ".$row['address']."</p>";


          echo "<button class='w3-button w3-block w3-black w3-margin-bottom'>Choose Room</button>";
      echo "</div>";
   echo "</div>";
  }
 ?>
  </div>



<?php
 // $db = mysqli_connect("localhost","root","","easybook");

 // $sql = "select * from upload_img";

 // $result = mysqli_query($db, $sql);
 
 ?>  


<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->




   </body>

 </html>
