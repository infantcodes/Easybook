<?php  session_start(); ?>

<?php
if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:adminlg.php");
       }

          echo $_SESSION['use'];
          

?>



<?php
$servername = "localhost";
$username = "root";
$password = "3lephantK1d";
$dbname = "easybook";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (!$result = mysqli_query($conn,"SELECT * FROM house"))
{
    die("Error: " . mysqli_error($conn));
}

$id =$_POST[''];
// sql to delete a record
$sql = "DELETE FROM house WHERE id= $id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>