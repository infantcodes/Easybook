<br><br>
<?php session_start() ?>
<?php
      if(!isset($_SESSION["email"])) // If session is not set then redirect to Login Page
       {
           header("Location:hostlg.php");
       }

          echo $_SESSION["email"];

          // echo "Login Success";

          // echo "<a href='logout.php'> Logout</a> ";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>UPLOAD SERVICES</title>


    <!-- links -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="../css/upload.css"> -->
  </head>

  <body>
   
  <div class="w3-top">
  <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
   href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://localhost/easybook/home.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>EASYBOOK</a>
  <!-- <a href="hom.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">home</a> -->
  <!-- <a href="profhs.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">my profile</a> -->
  <a href="upload.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">upload services</a>
  <!-- <a href="notification_host.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">notification</a> -->
  <a href="profhs.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">profile</a>
  <a href="logout_host.php" style="float: right;" class="w3-bar-item w3-button w3-hide-small w3-hover-white">log out</a>
</div>
</div>
<!-- </div> -->


<!-- <br><br> -->
<!-- <h3>Upload your services</h3> -->
    <div id="content">

    <form class="w3-container w3-card-4" action="" enctype="multipart/form-data" method="post">
      <label class="w3-text-teal"><b>Your userID: </b></label>
      <input class="w3-input w3-border" type="number" name="id"><br>

      <label class="w3-text-teal"><b>Address: </b></label>
      <input class="w3-input w3-border" type="text" name="address" ><br>

      <label class="w3-text-teal"><b>House description:</b></label>
      <br><textarea class="w3-input w3-border" name="des" rows="5" cols="40">
      </textarea><br>

      <label class="w3-text-teal"><b>Price: </b></label>
      <br><input class="w3-input w3-border" type="number" name="price" ><br>

      <input  class="w3-input w3-border" type="file" name="image"><br>

      <input  class="w3-btn w3-blue" type="submit" name="upload" onclick="alertkk()" value="Upload service">
<!-- 
        <input type="file" name="file_img" />
        <input type="submit" name="upload" value="upload">
 -->

    </form>
</div>


<?php
  $msg = "";
  //if upload button is pressed
  if (isset($_POST['upload'])) {
    //the path to store the uploaded image
    $target = "../images/".basename($_FILES['image']['name']);

    //connect to the database
    $db = mysqli_connect("localhost","root","","easybook");

    //get all the submitted data from the form

    $id = ($_POST['id']);
    $address = ($_POST['address']);
    $description = ($_POST['des']);
    $price = ($_POST['price']);
    $image = $_FILES['image']['name'];

//stores the submitted data into database
    $sql = "INSERT INTO house (hostID, address, description, price, name, imagepath)
     VALUES ('$id', '$address', '$description','$price', '$image','$target')";
    mysqli_query($db, $sql);

     //moves the uploaded image to the folder: images

     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      if($db->query($sql) === TRUE){

      echo "<script type='text/javascript'>alert('Service upload successful');</script>";
      header("Location: upload.php");
    }
    else{
      echo "<script type='text/javascript'>alert('Service upload unsuccessful, please try again');</script>";
      header("Location: upload.php"); 
    }
    }
     
  }
 ?>


 </html>
<script>
        function alertkk() {
            // body...
            alert("SERVICE UPLOAD SUCCESSFUL");
        }
</script>
  <!-- </html> -->
</body>

