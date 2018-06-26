
<?php
if (isset($_POST["submit"])) {
  if ($_POST["email"] == "admin" && $_POST["password"] == "admin@123") {
    header("Location: pages/admin.php";)
  }else {
  $email = $_POST["email"];
  $password = md5($_POST["password"]);

  //querying hte tourist
  $sql = "select email, password FROM tourist where email ='email' AND password ='$password'";
  if ($result ->num) {
    # code...
  }
  $result = $connectiong-> fetch_assoc();
  $_SESSION["email"] = $email;
  $message = "login success";
  }
}

 ?>



 <<?php
   session_start();
 	include "global.php";

   if(isset($_POST['submit'])){
 	//get stored password from database
 	$sql= "SELECT touristID,touristName FROM tourist WHERE Password='".MD5($_POST['password'])."'";
 	$res = mysqli_query($db,$sql);
 	if($res){
 	$row= mysqli_fetch_assoc($res);
 	$name= $row['touristName'];
 	$_SESSION['touristName'] =$name ;
 	$_SESSION['touristID'] =$row['touristID'] ;
 	header("location:hometr.php");
 	}else{
 	echo "Your details did not match";
 	exit;
 	}
 	}

  ?>
