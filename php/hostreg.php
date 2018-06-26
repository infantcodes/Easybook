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
  $hostName = ($_POST['hostnm']);
  $email = ($_POST['email']);
  $gender = ($_POST['gender']);
  $address = ($_POST['address']);
  $Password = ($_POST['pass']);
  $Password2 = ($_POST['cpass']);
  $Type = "host";

  if ($Password2 != $Password) {
    # code...
    echo "PASSWORD DID NOT MATCH. PLEASE TRY AGAIN!";
  }else {
    $sql ="INSERT INTO hosts (hostName, email, gender, address, Password) VALUES
     ('$hostName', '$email', '$gender', '$address',MD5('".$Password."'))";
// MD5('".$Password."')
     if ($db->query($sql) === TRUE) {
          // echo "New record created successfully";
          header("Location: hom.php");
            // header("Location: http://localhost/easybook/index.html");
      } else {
          echo "Error: " . $sql . "<br>" . $db->error;
      }

      $db->close();
}
}
 ?>
