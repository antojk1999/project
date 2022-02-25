<?php
include('./config.php');
?>
<html>
<head>
<style>

#myInput,#myInput2 {
  
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 40%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 80%;
  height:10%
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
.form-popup {
  
  display: none;
  position: fixed;
  top:15%;
  bottom:10%;
  left:20%;
  
  
  border: 3px solid #f1f1f1;
  z-index: 9;
}

.form-container {
  max-width: 800px;
  padding: 30px;
  background-color:#bdc7cd;
  
}

.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

ul li a{
	color:white;
	text-decoration:none;
	
}

button{
	width:150px;
	height:50px;
	background:#f5f5f5;
	border-radius:15px;
}
tabl{
	
	width:150%;
	height:20px;
}
.btn{
	top:10%;
	width:150px;
	height:50px;
	background:#24ddf5;
	border-radius:15px;
}
.btn1{
	top:10%;
	width:200px;
	height:200px;
	background:#447a48;
	
	border-radius:1000%;
}

.btn2{
	margin-left:50px;
	top:10%;
	width:70px;
	height:70px;
	background:white;
	border-radius:0%;
}
.an
{
	color:red;
}

text
{
	color:#f5f5f5;
	font-size:15;
	font-family:Elephant;
	
}
</style>
</head>
<body>
<div style="
margin-top:0px;
background:#261656	;
width:100%;
height:50px;">

<p style="margin-left:80%;"><a href="../index.php"> <button>Logout</button></a></p>

</div>


<div style="
margin-top:-15px;
margin-left:0px;
background:#261656;
width:250px;
height:300%;"/>



<div>
<ul>
<table cellpadding="20px" cellspacing="20px" >
<tr>
<td ><l><button>Hospital Booking</button> </li></td></tr>
<td></td>
</tr>
</ul>
</td>
</tr>
</table>

<div style="margin-top:-100px;margin-left:350px;" >
<table>
<tr>

<td><button class="btn1" onclick="newuser()"><text>New User</button></td>
<td><button class="btn1" onclick="booking()"><text>New Booking</button></td>
<td><button class="btn1" onclick="booked()"><text>Get Token Number</button></td>
<td><button class="btn1" onclick="lost()"><text >Get OP Number?</button></td>
</tr>
<tr>

</tr>

</table>
</div>

</div>


<div class="form-popup" id="newuser">
  <form class="form-container" method="post" action="hosbook(php).php">
    
    
	
	<label for="email"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>
	
	<label for="email"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>
	
	<label for="email"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phno" pattern="[0-9]{10}" required>
	
    

<table>
<tr>
    <td><button type="submit1" name="submit1" class="btn">Payment</button></td>
    <td><button type="reset" class="btn cancel" onclick="closeForm1()">Close</button></td>
	
</table>
</tr>
  </form>
</div>

<script>
function newuser() {
  document.getElementById("newuser").style.display = "block";
}

function closeForm1() {
  document.getElementById("newuser").style.display = "none";
}
</script>




<div class="form-popup" id="booking" style="overflow:scroll">


  <form class="form-container" method="post" action="hosbook(php).php">
    

    <label for="email"><b>Registered Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="phno" required>

    <label for="psw"><b>OP Number</b></label>
    <input type="text" placeholder="Enter OP Number" name="opno" required>
	
	

<input type="text" id="myInput" onkeyup="myFunction1()" placeholder="Search for Doctors" title="Type in a name"/>
<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for Departments.." title="Type in a name"/>


 <div style="width:100%; height:250px;  overflow: scroll;">



<table id="myTable" >

<?php


$new1="SELECT d1.dept,d2.attendence,d2.doctname from hosdept d1,deptdoctors d2 WHERE d1.deptid=d2.deptid ";

$res1=mysqli_query($con,$new1);
$res2=mysqli_query($con,$new1);
$res3=mysqli_query($con,$new1);

?>


<?php

while($r1=mysqli_fetch_assoc($res3))
{
?>	
<tr>
<td><?php echo $r1["doctname"];?></td>
<td><?php echo $r1["dept"];?></td>

<!--<td><button style="width:90px;height:40px;background:#056f51;border-radius:9px;" name="submi">
		 <text style="color:white;"> select</a>
		 </button>
</td>
</tr> 

-->


<?php 
}

?>


<tr>
<td>
<select name="doc1">
<?php

while($r1=mysqli_fetch_assoc($res1))
{
?>
	<option name="doc"><?php echo $r1["doctname"];?></option>
	
<?php 
}

?>

</select>
</td>

<td>
<select name="dept1">
<?php

while($r1=mysqli_fetch_assoc($res2))
{
?>


	
	<option name="dept"><?php echo $r1["dept"];?></option>
<?php 
}

?>

</select>
</td>
</tr>
</table>

</div>

<table>
<tr>
<td>
<button style="width:200px;height:40px;background:#056f51;border-radius:9px;" name="submi">
		 <text style="color:white;"> Fix Appointment</a>
		 </button></td>
  
 <td><button type="reset" class="btn cancel" onclick="closeForm2()">Close</button></td>
</tr>
</table>


  </form>
  
 
   
</div>

<script>
function booking() {
  document.getElementById("booking").style.display = "block";
}

function closeForm2() {
  document.getElementById("booking").style.display = "none";
}
</script>

<div class="form-popup" id="booked">
  <form class="form-container" method="post" action="">
    <h1></h1>

    <label for="email"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phno" required>

    <label for="psw"><b>OP Number</b></label>
    <input type="text" placeholder="Enter OP Number" name="opno" required>
<table>
<tr>
    <td><button type="submit3" name="submit3" class="btn">Get Token Number</button></td>
    <td><button type="reset" class="btn cancel" onclick="closeForm3()">Close</button></td>
	</tr>
</table>
  </form>
 
</div>


<script>
function booked() {
  document.getElementById("booked").style.display = "block";
}

function closeForm3() {
  document.getElementById("booked").style.display = "none";
}
</script>

<div class="form-popup" id="lost">
  <form class="form-container" method="post" action="">
    <h2>OP card</h2>
    
	
	<label for="email"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>
	
	<label for="email"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>
	
	<label for="email"><b>Registered Phone Number</b></label>
    <input type="text" placeholder="Enter registered Phone Number" name="phno" required>
	
   

<table>
<tr>
    <td><button type="submit4" name="submit4" class="btn">Get OP Number</button></td>
	
    <td><button type="reset" class="btn cancel" onclick="closeFor()">Close</button></td>
	
</table>
</tr>
  </form>
</div>


<script>
function lost() {
  document.getElementById("lost").style.display = "block";
}

function closeFor() {
  document.getElementById("lost").style.display = "none";
}
</script>


<?php
if(isset($_POST['submit4']))
{
?>
<table>
	<tr>	
	<button style="margin-top:20%;margin-left:150%;height:200px;width:200px;background:#261656;border-radius:1000%;"class="btn cancel" >
	<h2><text >your op number</text><br>
	<?php

	$lname=$_POST['lname'];
	$fname=$_POST['fname'];
	$phno=$_POST['phno'];
	
	$rec="SELECT * from hosusers ";
	$abc=mysqli_query($con, $rec);	
	
while($row6=mysqli_fetch_assoc($abc))
{
	if($row6['fname']==$fname && $row6['lname']==$lname && $row6['phno']==$phno)
	{
	
		?>
		<text style="color:white;"><h1><?php echo $row6['opno'] ?></text>
		<?php
	}
}
?>	
</h2>
	</button>
	
	</tr>
<?php	
}
?>

<?php
if(isset($_POST['submit3']))
{
	
	
?>

<?php

	$phno=$_POST['phno'];
	$opno=$_POST['opno'];
	
	$re="SELECT d.doctid,ho.dept,de.doctname,d.opno,d.tokenno from doctpatients d,hosusers h,deptdoctors de,hosdept ho WHERE h.phno=$phno AND d.opno=$opno AND d.opno=h.opno AND d.doctid=de.doctid AND de.deptid=ho.deptid";
	
	$ab=mysqli_query($con, $re);

	
	
while($row3=mysqli_fetch_assoc($ab))
{
	if($row3['opno']==$opno)
	{
		
		$l= $row3['doctid'];
		$live="SELECT min(tokenno) as tokenno FROM `doctpatients` where doctid=$l and waitlist=0";
		$liv=mysqli_query($con, $live);
		while($row7=mysqli_fetch_assoc($liv))
		{
		
		?>
		
		<table width="350%" style="margin-top:20%;margin-left:120%;background:;">
		 <tr>
		<td>		 
		 doctor name:
		 </td>
		 <td>
		department:
		</td>
		 <td>
		 your token number:		 
		 </td>
		 <td>
		 Live token number:		 
		 </td>
		 
		 </tr>	
		 <tr>
		 
		 
		 <td>
		 <?php echo $row3['doctname'] ?>	 
		 
		 </td>
		 <td>
		 <?php echo $row3['dept'] ?>
		 </td>
		 <td>
		 <center><div style="border-radius:100%;width:50px;height:50px;margin-top:10px;background:#2ab1bff2;">
		 <text style="color:white;"><h1><?php echo $row3['tokenno'] ?></h1></text></div></center>
		 
		 <?php
		 if($row3['tokenno']<$row7['tokenno'])
		 {
			 
		 echo "<span class='an'>!.you are under waiting list.please wait for the call.!</span>";
		 }
		 ?>
		 </td>
		 <td> <center><div style="border-radius:100%;width:50px;height:50px;margin-top:10px;background:#2ab1bff2;">
		 <text style="color:white;"><h1><?php echo $row7['tokenno'] ?></h1></text></div></center>
		  </td>
		 </tr>
		</table>
		
		
		
		
<?php
}
}
}
}

?>

</body>
</html>

<script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

