<?php
$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$gender = filter_input(INPUT_POST,'gender');
$email = filter_input(INPUT_POST,'email');
$fname= filter_input(INPUT_POST,'fname');
$mname= filter_input(INPUT_POST,'mname');
$address=filter_input(INPUT_POST,'address');
if (!empty($firstname) || !empty($lastname) || !empty($gender) || !empty($email) || !empty($fname) || !empty($mname) || !empty($address) ) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "register";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
   if (mysqli_connect_error()) 
	{
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} 
   else 
	{
     $sql= "INSERT Into register (firstname,lastname, gender, email,fname,mname,address) values('$firstname','$lastname','$gender','$email','$fname','$mname','$address')";
      if($conn->query($sql))
	 {
	 echo "New record inserted sucessfully";
	 }
	  else{
		 echo "Error:".$sql."<br>".$conn->error;
		}
	 } 
     $conn->close();
    }
else 
{
 echo "All field are required";
 die();
}
?>











<?php
$pschool = filter_input(INPUT_POST,'pschool');
$saddress = filter_input(INPUT_POST,'saddress');
$date = filter_input(INPUT_POST,'date');
$course = filter_input(INPUT_POST,'course');
$courseyear= filter_input(INPUT_POST,'courseyear');

if (!empty($pschool) || !empty($saddress) || !empty($date) || !empty($course) || !empty($courseyear)) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "register";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
   if (mysqli_connect_error()) 
	{
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} 
   else 
	{
     $sql= "INSERT Into Eduregister (prevschool,schooladdress, lastattended,course,courseyear) values('$pschool','$saddress','$date','$course','$courseyear')";
      if($conn->query($sql))
	 {
	 echo "New record inserted sucessfully";
	 }
	  else{
		 echo "Error:".$sql."<br>".$conn->error;
		}
	 } 
     $conn->close();
    }
else 
{
 echo "All field are required";
 die();
}
?>
