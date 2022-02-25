


<html>
<head>
<style>





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
btn{
	width:150px;
	height:50px;
	background:#24ddf5;
	border-radius:15px;
}
</style>
</head>
<body>
<div style="
margin-top:0px;
background:#462f2f	;
width:100%;
height:50px;">

<p style="margin-left:80%;"><a href="userlogin.php"> <button>Logout</button></a></p>

</div>


<div style="
margin-top:-15px;
margin-left:0px;
background:#462f2f;
width:250px;
height:100%;">



<div><ul>
 <table cellpadding="20px" cellspacing="20px" >
 <tr>
 <td><l><button>Hospital Booking</button> </li></td></tr>
 <td><li><a href="roomdeatails.php">Other Organization</button></a></li></td></tr>
</ul>
</td>
</tr>
</table>


<div style="margin-top:-100px;margin-left:250px;" >

<form  method="post" action="hosbook.php">
<table cellpadding="10px" cellspacing="10px">

<tr>
<td>Country</td>
<td><select>
<option>-------</option>
<option>country 1</option>
<option>country 2</option>
<option>country 3</option>
<option>country 4</option>
<option>country 5</option>
</select></td>
</tr>
<tr>
<td>state</td>
<td><select>
<option>-------</option>
<option>state 1</option>
<option>state 2</option>
<option>state 3</option>
<option>state 4</option>
<option>state 5</option>
</select></td>
</tr>
<tr>
<td>district</td>
<td><select>
<option>-------</option>
<option>district 1</option>
<option>district 2</option>
<option>district 3</option>
<option>district 4</option>
<option>district 5</option>
</select></td>
</tr>
<tr>
<td>Hospital Name</td>
<td><select>
<option>-------</option>
<option>hospital 1</option>
<option>hospital 2</option>
<option>hospital 3</option>
<option>hospital 4</option>
<option>hospital 5</option>
</select></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Next"></td>
</tr>
</form>
</table>


</div>
</div>

</body>
</html>
