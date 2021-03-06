<?php  session_start(); ?>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 20%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-left: 189px;
}

#myTable {
  border-collapse: collapse;
  width: 70%;
  border: 1px solid #ddd;
  font-size: 18px;
  margin-left: auto;
  margin-right: auto;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr.header{
  background-color: #04705c;
}

#myTable tr:hover {
  background-color: #f1f1f1;
}
/*#myTable tr:hover {
  opacity: 0.5;
}
*/
/*#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;*/
/*}*/
</style>

<!-- This code ensures that if the user is not logged in they are re-directed to the sign in page -->
<?php
if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:adminlg.php");
       }

          echo $_SESSION['use'];
          

?>

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>ADMINISTRATOR PORTAL | Welcome</title>


        <!-- links -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="../css/tr.css">

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
    <!-- <a href="indexa.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">home</a> -->
    <a href="viewtr.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">view tourist</a>
    <a href="viewhs.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">view hosts</a>
    <a href="viewho.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">view houses</a>
    <a href="viewbk.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">View Booking</a>
    <a href="viewpy.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">view paymet</a>
    <a href="logout_host.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">logout</a>
  </div>
  </div>
  
  <br><br>
  <div class="admin">

  <!-- <a href="http://localhost/easybook/book.html"><button type="submit" name="button">BOOK</button></a> -->

  <?php
  $db = mysqli_connect("localhost","root","3lephantK1d","easybook");

  $sql = "select * from payment";

  $result = mysqli_query($db, $sql);


  while ($row = mysqli_fetch_array($result)) {
   
  echo "<table  id='myTable'>
  <h4>PAYMETS</h4>
  <input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for tourist..' title='Type in a name'>
      <thead>
      <tr class='header'>
      <th> </th>
      <th>ID</th>

      <th>card no</th>

      <th>house ID</th>

      <th>Tourist name</th>

      <th>Payment</th>
      </tr>
      </thead>
      <tbody>";

    while($row = $result->fetch_assoc()) {
        echo "
        <tr>
         <td><a href='delete_ho.php'><button>DELETE</button></a> </td>
        

        <td>{$row["id"]}</td>

        <td>{$row["cardNo"]}</td>

        <td>{$row["houseID"]}</td>

        <td>{$row["name"]}</td>

        <td>{$row["amount"]}</td>

        </tr>

      </tbody>";

    }
    
    echo "</table>";
  } 
// echo "
//     <td>
//         <a href='delete.php'><button>Delete</button></a>
//         </td>";
?>  
  <!-- <button type="submit" name="button">book</button> -->

  </div>
  <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    </body>
  </html>

<!-- if (isset($_POST['submit'])) {

  $id=$_POST['selectid'];
  if ($id == "") {
    echo "please input an id";
  }else {
    $sql = "DELETE FROM house where houseID = '$id'";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('DELETED SUCCESSFULLY');</script>";
    } else {
      echo "<script>alert('ERROR DELETING');</script>";
    }
  }
}
?>

  <html>
    <body>
      <form>
        <input name='selectid' placeholder="Enter id to delete">
        <button type="submit">DELETE</button>
      </form>
    </body>
  </html>

 -->