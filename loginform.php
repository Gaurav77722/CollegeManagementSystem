<?php
$username=$_POST['username'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"login");

$result=mysqli_query($conn,"select * from login where username='$username' and password='$password'")
		or die("Connection failed".mysqli_error($conn));

$row=mysqli_fetch_array($result);

if($row['username']==$username && $row['password']==$password)
	{
		if($username=='student')
		{
			Header("Location:studentredirect.html");
		}
		else
		{
			Header("Location:facultyredirect.html");
		}
	}
else
	{
		echo "Failed";
	}
?>
		