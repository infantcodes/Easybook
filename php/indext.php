
<?php
echo "cool";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WELCOME | EASYBOOKING</title>

    <!-- links -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EASYBOOK</a>
  <a href="book.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">BOOKING</a>
<!-- <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">UPLOAD</a> -->
  <!-- <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Price</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button">services <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="book.html" class="w3-bar-item w3-button">Book</a>
      <a href="upload.html" class="w3-bar-item w3-button">Upload</a>
      <!-- <a href="#" class="w3-bar-item w3-button">Link</a> -->

    </div>

  </body>
</html>
