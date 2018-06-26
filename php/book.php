
<br><br>
<!-- <br><br>
<br><br> -->

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

<?php
  
$servername = "localhost";
$username = "root";
$password = "3lephantK1d";
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
  $checkIN = ($_POST['start']);
  $checkOut = ($_POST['end']);
  // $Password = ($_POST['pass']);
  // $Password2 = ($_POST['cpass']);
  // $Type = "tourist";


  $sql ="INSERT INTO booking (touristID, houseID, startDate, endDate) VALUES
     ('$touristID ', '$houseID', '$checkIN', '$checkOut')";


      if ($db->query($sql) === TRUE) {

          echo "<br><br>New record created successfully";
          // header("Location: hometr.php");
            header("Location: paytr.php");
      } else {
          echo "Error: " . $sql . "<br>" . $db->error;
      }

      $db->close();
  }
?>