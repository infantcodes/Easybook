<?php
session_start();
echo "<br />";

 echo "Logout Successfully ";
 session_destroy();   // function that Destroys Session
 header("Location: http://localhost/easybook/home.html");
 ?>
