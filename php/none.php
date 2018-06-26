
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>ADMINISTRATOR PORTAL | Welcome</title>


       <!-- links -->
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="css/tour.css">

   </head>
   <body>



     <!-- Sidebar on click -->
     <nav class="w3-sidebar w3-bar-block w3-white w3-card-2 w3-animate-left w3-xxlarge"
     style="display:none;z-index:2" id="mySidebar">
     <a href="javascript:void(0)" onclick="w3_close()"
     class="w3-bar-item w3-button w3-display-topright w3-text-teal">
     <i class="fa fa-remove"></i></a>

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
    href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i>see</a>

   <a href="http://localhost/easybook/home.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EASYBOOK</a>
   <a href="indexa.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">home</a>
   <a href="viewtr.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">view tourist</a>
   <a href="viewho.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">view houses</a>
   <a href="logout_host.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">logout</a>
 </div>
 </div>
 <!-- <a href="http://localhost/easybook/home.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EASYBOOK</a>
 <a href="http://localhost/easybook/book.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">BOOKING</a> -->
 <br><br>
 <div class="admin">

 <!-- <a href="http://localhost/easybook/book.html"><button type="submit" name="button">BOOK</button></a> -->

 <?php
 $db = mysqli_connect("localhost","root","","easybook");

 $sql = "select * from hosts";

 $result = mysqli_query($db, $sql);


 while ($row = mysqli_fetch_array($result)) {
  // echo "<div id='image_div'>";
 //  echo "<p> hostId: ".$row['houseID']."</p>";
 //    // echo "<img src ='".$row['image']."' >";
 //    echo "<p>hostName <br>".$row['name']."</p>";
 //  echo "<p> price: ".$row['price']."</p>";
 //
 //  echo "<button>book</button>";
 //  echo "</div>";
 // }
 echo "<table>
 <h4>LIST OF HOSTS IN THE DATABASE</h4>
     <thead>
     <th>HostID
     <th>Host Name</th>
     <th>Email</th>
     <th>Gender</th>
     <th>Address</th>
     </thead>
     <tbody>";

   while($row = $result->fetch_assoc()) {
       echo "
       <tr>
       <td> {$row["hostID"]}</td>
       <td>{$row["hostName"]}</td>
       <td>{$row["email"]}</td>
       <td>{$row["gender"]}</td>
       <td>{$row["address"]}</td>

     </tbody>";

   }
   echo "</table>";
 }
 ?>
 <!-- <button type="submit" name="button">book</button> -->

 </div>
   </body>
 </html>





<!-- This is from book.php-->
<!--
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "easybook";

// Create connection
$db = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "not connect";
} else {
  $touristID = ($_POST['id']);
  $houseID = ($_POST['hse']);
  $startDate = ($_POST['start']);
  $endDate = ($_POST['end']);
  $Type = "booking";

  $sql ="INSERT INTO booking (touristID, houseID, startDate, endDate) VALUES
   ('$touristID', '$houseID', '$startDate', '$endDate')";

   if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
      }else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    $db->close();
}
?> -->






<!--THIS IS FROM hom.php upper section -->
<?php
  $msg = "";
  //if upload button is pressed
  if (isset($_POST['upload'])) {
    //the path to store the uploaded image
    $target = "images/".basename($_FILES['image']['name']);

    //connect to the database
    $db = mysqli_connect("localhost","root","","easybook");

    //get all the submitted data from the form

    $image = $_FILES['image']['name'];

    $sql = "INSERT INTO hosts (prof) VALUES ('$image')";
    mysqli_query($db, $sql);

     //moves the uploaded image to the folder: images

     if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
     {
       $msg = "image uploaded successfully";
     }else {
       $msg = "There was a problem uploading the image";
     }
  }
 ?>


<!-- THIS IS FROM hom.php BODY-->
 <!-- <br><br> -->
 <div id="prof">
 <?php
 $db = mysqli_connect("localhost","root","","easybook");
 $sql = "select prof from hosts";
 $result = mysqli_query($db, $sql);

 while ($row = mysqli_fetch_array($result)) {
   echo "<div id='image_div'>";
     echo "<img src ='".$row['prof']."' >";
   echo "</div>";
 }
  ?>




<!-- THIS IS FROM hometr.php BODY-->


 <?php
 session_start(); // Starting Session
 $error=''; // Variable To Store Error Message
 if (isset($_POST['submit']))
 {
 if (empty($_POST['username']) || empty($_POST['password'])) {
 $error = "Username or Password is invalid";
 }
 else
 {
 // Define $username and $password
 $username=$_POST['username'];
 $password=$_POST['password'];
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "easybook";
 // Establishing Connection with Server by passing server_name, user_id and password as a parameter
 // $connection = mysqli_connect("localhost", "root", "");

 $connection = mysqli_connect($servername, $username, $password,$db);
 // To protect MySQL injection for Security purpose
 $username = stripslashes($username);
 $password = stripslashes($password);
 $username = mysql_escape_string($username);
 $password = mysql_escape_string($password);
 // Selecting Database
 // $db = mysql_select_db("easybook", $connection);
 // SQL query to fetch information of registerd users and finds user match.
 $query = mysql_query("select * from tourist where touristName ='$username' AND Password='$password'",
  $connection) or die (mysql_error());
 $rows = mysql_num_rows($query);
 if ($rows == 1) {
 $_SESSION['login_user']=$username; // Initializing Session
 header("location: indext.php"); // Redirecting To Other Page
 } else {
 $error = "Username or Password is invalid";
 }
 mysql_close($connection); // Closing Connection
 }
 }
 ?>


<!-- THIS CODE IS GOT FROM hometr.php upper part-->

<?php

  // echo "Welcome";
  $db = mysqli_connect("localhost","root","","easybook");

  $sql = "select * from house";

  $result = mysqli_query($db, $sql);


  while ($row = mysqli_fetch_array($result)) {
   echo "<div id='image_div'>";

     echo "<img src ='".$row['image']."' >";
    //  echo "<p>hostName <br>".$row['name']."</p>";
    echo "<p> houseID: ".$row['houseID']."</p>";
   echo "<p> price: ".$row['price']."</p>";

   echo "<button>book</button>";
   echo "</div>";
  }
 ?>



<!-- This code is from upload.php -->

<?php
  $msg = "";
  //if upload button is pressed
  if (isset($_POST['upload'])) {
    //the path to store the uploaded image
    $target = "images/".basename($_FILES['image']['name']);

    //connect to the database
    $db = mysqli_connect("localhost","root","","easybook");

    //get all the submitted data from the form

    $id = ($_POST['id']);
    $address = ($_POST['address']);
    $description = ($_POST['des']);
    $price = ($_POST['price']);
    $image = $_FILES['image']['name'];

//stores the submitted data into database
    $sql = "INSERT INTO house (hostID, address, description, price, image)
     VALUES ('$id', '$address', '$description','$price', '$image')";
    mysqli_query($db, $sql);

     //moves the uploaded image to the folder: images

     if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
     {
       $msg = "image uploaded successfully";
     }else {
       $msg = "There was a problem uploading the image";
     }
  }
 ?>


<!--This code was from hometr.php upper part-->
<?php

  // echo "Welcome";
  $db = mysqli_connect("localhost","root","","easybook");

  $sql = "select * from house";

  $result = mysqli_query($db, $sql);


  while ($row = mysqli_fetch_array($result)) {
   echo "<div id='image_div'>";

     echo "<img src ='".$row['image']."' >";
    //  echo "<p>hostName <br>".$row['name']."</p>";
    echo "<p> houseID: ".$row['houseID']."</p>";
   echo "<p> price: ".$row['price']."</p>";

   echo "<button>book</button>";
   echo "</div>";
  }
 ?>


<!-- THIS CODE IS FROM upload.php-->
<?php
//if upload button is pressed
if (isset($_POST['upload'])) {


 $db = mysqli_connect("localhost","root","","easybook");

  //get all the submitted data from the form

  $id = ($_POST['id']);
  $address = ($_POST['address']);
  $description = ($_POST['des']);
  $price = ($_POST['price']);
  $folder='/xampp/htdocs/images/easybook/';

  $tmp_name = $_FILES["image "][" tmp_name "];
  $name = $_FILES[" image "][" name "];

  $sql = "INSERT INTO house (hostID, address, description, price,imagepath, name)
  VALUES('$id', '$address', '$description','$price','$folder','$image')";
  $var=mysqli_query($db,$sql);
// $folder="/xampp/htdocs/images/easybook/";
if (move_uploaded_file($tmp_name, "$folder".$name)) {
  //stores the submitted data into database
      // $sql = "INSERT INTO house (hostID, address, description, price, image)
      //  VALUES ('$id', '$address', '$description','$price', '$image')";
      echo "successful upload";
    }else {
      echo "unsuccessful";
    }

  }
// move_uploaded_file($tmp_name, "$folder".$name);

// $sql="INSERT INTO house (hostID, address, description, price,imagepath, image)
// VALUES('$id', '$address', '$description','$price','$folder','$image')";
//stores the submitted data into database
    // $sql = "INSERT INTO house (hostID, address, description, price, image)
    //  VALUES ('$id', '$address', '$description','$price', '$image')";
//
// $var=mysqli_query($db,$sql);
// }
?>


<!-- From hometr.php upper part-->

<?php
$host = 'localhost';
$user = 'root';
$pass = ' ';

mysqli_connect($host, $user, $pass);

mysqli_select_db('easybook');

$select_path="select * from house";

$var=mysqli_query($select_path);

while($row=mysqli_fetch_array($var))
{
 $image_name=$row["image"];
 $image_path=$row["imagepath"];
 echo "img src=".$image_path."/".$image_name." width=100 height=100";
}
?>


<!-- This is a template for displaying images in hometr.php -->
<!--This is for the header part-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--This is for the body part-->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Listed houses</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <img src="https://www.w3schools.com/w3images/house5.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <img src="https://www.w3schools.com/w3images/house2.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
        <img src="https://www.w3schools.com/w3images/house3.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <img src="https://www.w3schools.com/w3images/house4.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <img src="https://www.w3schools.com/w3images/house2.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <img src="https://www.w3schools.com/w3images/house5.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
        <img src="https://www.w3schools.com/w3images/house4.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <img src="https://www.w3schools.com/w3images/house3.jpg" alt="House" style="width:99%">
      </div>
    </div>
    </div>

