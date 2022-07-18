<?php
$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$gender = filter_input(INPUT_POST,'gender');
$email = filter_input(INPUT_POST,'email');
$fname= filter_input(INPUT_POST,'fname');
$mname= filter_input(INPUT_POST,'mname');
$address=filter_input(INPUT_POST,'address');
$pschool = filter_input(INPUT_POST,'pschool');
$saddress = filter_input(INPUT_POST,'saddress');
$date = filter_input(INPUT_POST,'date');
$course = filter_input(INPUT_POST,'course');
$courseyear= filter_input(INPUT_POST,'courseyear');
$link = mysqli_connect("localhost", "root", "", "register"); 
  
if($link === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
  
$sql = "UPDATE register,eduregister SET register.lastname='$lastname', register.gender='$gender', register.email='$email',register.fname='$fname',register.mname='$mname',register.address='$address',eduregister.prevschool='$pschool',eduregister.schooladdress='$saddress',eduregister.lastattended='$date',eduregister.courseyear='$courseyear' WHERE register.firstname='$firstname' and eduregister.course='$course'"; 
if(mysqli_query($link, $sql)){ 
    echo "Record was updated successfully."; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                   . mysqli_error($link); 
} 
mysqli_close($link); 
?> 