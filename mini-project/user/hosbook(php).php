
<?php
if(isset($_POST['submit1']))
{
include('config.php');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phno=$_POST['phno'];


$op="SELECT max(opno) FROM `hosusers` ";

$o=mysqli_query($con, $op);
while($row4=mysqli_fetch_assoc($o))
{
$opnou=$row4['max(opno)']+1;	


$sql="INSERT INTO `hosusers`(`hosid`, `fname`, `lname`, `phno`, `opno`) values(100,'$fname','$lname','$phno',$opnou)";

mysqli_query($con, $sql);
}
?>
<script>alert(<?php echo $opnou ?>)

</script>;
<?php

}

	
?>


<?php
if(isset($_POST['submi']))
{
	include('config.php');
$phno=$_POST['phno'];
$opno=$_POST['opno'];
$dept=$_POST['dept1'];
$doctname=$_POST['doc1'];

$sql="SELECT * FROM `hosusers";
$sq="SELECT d.deptid,d.doctid from hosdept h,deptdoctors d WHERE h.dept='$dept' and d.doctname='$doctname' and h.deptid=d.deptid";


$result1=mysqli_query($con, $sql);
$result2=mysqli_query($con, $sq);



while($row1=mysqli_fetch_assoc($result1))
{
	if($row1['phno']==$phno && $row1['opno']==$opno)
	{
		while($row2=mysqli_fetch_assoc($result2))
		{			
			$doid=$row2['doctid'];
			$s="select count(*) from doctpatients where doctid=$doid";
			$result3=mysqli_query($con, $s);
		}
	}
}	
			
		$check="SELECT de.doctid=$doid as doctid,h.opno=$opno as opno from deptdoctors de,hosusers h,doctpatients d WHERE(SELECT d.doctid=de.doctid and d.opno=h.opno)";
		$result5=mysqli_query($con, $check);
		
		$pointer=0;
		while($row5=mysqli_fetch_assoc($result5))
		{
			
			if($row5['doctid']==1 && $row5['opno']==1)
			{
				$pointer=1;
			}
		}
			if($pointer==0)
			{
				while($row3=mysqli_fetch_assoc($result3))
					{
					
					
					$que1="select * from waitcount where doctid=$doid";
					$re=mysqli_query($con,$que1);
					while($r123=mysqli_fetch_assoc($re))
					{
					
					$c=$r123['count']+1;
					$que2="UPDATE `waitcount` SET count=$c WHERE doctid=$doid";
					mysqli_query($con,$que2);
					}
					
		
					
					$r="INSERT INTO `doctpatients`(`doctid`, `opno`,`tokenno`) VALUES ($doid,$opno,$c)";
					mysqli_query($con, $r);
					echo "<script>alert('success...!ypur appointment fixed')</script>";
					header("location:hosbook.php");
					
					}
	
			}
			else if($pointer==1)
			{
				echo "<script>alert('you are already booked')</script>";
				header("location:hosbook.php");
			}
		  
		
}	


?>
 <?php
 
 ?> 




