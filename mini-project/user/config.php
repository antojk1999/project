
<?php
session_start();
$db=$_SESSION["hos"];
$servername = "localhost";
$username = "root";
$password = "hospital1";

// Create connection
$con = new mysqli($servername, $username,"", $db);
//$con=mysqli_connect("localhost","root","","hospital1");

?>

