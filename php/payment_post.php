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
	# code...
		$CardNo=$_POST['CardNumber'];
		$houseNo=$_POST['hsID'];
		$Name=$_POST['name'];
		$Amount=$_POST['amount'];
		// $city=$_POST['city'];
		// $country=$_POST['country'];
		// $comments=$_POST['comment'];

		$sql="INSERT into payment (cardNo,houseID,name,amount) values ('$CardNo','$houseNo','$Name','$Amount')";
		
		if($db->query($sql) === TRUE){
			echo "<script type='text/javascript'>alert('Reservation Successful'); document.location='packages.php'</script>";
			header("Location: hometr.php");
		}
		else{
			echo "<script type='text/javascript'>alert('Reversation is unsuccessful, please contact try again'); document.location='paytr.php'</script>";
			
		}
	}
	
?>