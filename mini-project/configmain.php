
<?php
session_start();
$hos=$_POST['hospital'];
$s=$_POST['state'];
$dis=$_POST['district'];
$con=mysqli_connect("Localhost","root","","hospitals") ;
$qu="SELECT hosdb FROM `hospital` WHERE hosname='$hos'";
$re=mysqli_query($con,$qu);
while($row=mysqli_fetch_assoc($re))
{
	$db= $row['hosdb'];
}
$_SESSION["hos"] = $db;
if($db!=null && $s!=null && $dis!=null)
{
header('location:user/hosbook.php');
}
else
{
	header('location:index.php');
}
?>
