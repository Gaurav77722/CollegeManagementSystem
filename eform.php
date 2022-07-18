<?php
$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$class = filter_input(INPUT_POST,'class');
$YOE = filter_input(INPUT_POST,'YOE');
$gender= filter_input(INPUT_POST,'gender');
$DOB= filter_input(INPUT_POST,'DOB');
$email = filter_input(INPUT_POST,'email');
$address=filter_input(INPUT_POST,'address');
if (!empty($firstname) || !empty($lastname) || !empty($class) || !empty($YOE) || !empty($gender) || !empty($DOB) || !empty($email) || !empty($address) ) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "faculty";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
   if (mysqli_connect_error()) 
	{
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} 
   else 
	{
     $sql= "INSERT Into faculty (firstname,lastname,class,YearsOfExperience,gender,DateOfBirth,email,address) values('$firstname','$lastname','$class','$YOE','$gender','$DOB','$email','$address')";
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