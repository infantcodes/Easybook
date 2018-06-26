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
  $touristName = ($_POST['name']);
  $gender = ($_POST['gender']);
  $email = ($_POST['email']);
  $nationality = ($_POST['nationality']);
  $Password = ($_POST['pass']);
  $Password2 = ($_POST['cpass']);
  $Type = "tourist";

  if ($Password2 != $Password) {

    echo "PLEASE TRY AGAIN!";
  }else {
    $sql ="INSERT INTO tourist (touristName, gender, email, nationality, Password) VALUES
     ('$touristName', '$gender', '$email', '$nationality',MD5('".$Password."'))";
// MD5('".$Password."')
     if ($db->query($sql) === TRUE) {
          // echo "New record created successfully";
            header("Location:tourlg.php ");
            echo "Now sign in";
      } else {
          echo "Error: " . $sql . "<br>" . $db->error;
      }

      $db->close();
  }
}

 ?>
