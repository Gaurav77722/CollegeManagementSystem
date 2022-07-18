<?php
$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$class = filter_input(INPUT_POST,'class');
$YOE = filter_input(INPUT_POST,'YOE');
$gender= filter_input(INPUT_POST,'gender');
$DOB= filter_input(INPUT_POST,'DOB');
$email = filter_input(INPUT_POST,'email');
$address=filter_input(INPUT_POST,'address');
$link = mysqli_connect("localhost", "root", "", "faculty"); 
  
if($link === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
  
$sql = "UPDATE faculty SET lastname='$lastname', class='$class', YearsOfExperience='$YOE',gender='$gender',DateOfBirth='$DOB',email='$email',address='$address' WHERE firstname='$firstname'"; 
if(mysqli_query($link, $sql)){ 
    echo "Record was updated successfully."; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                   . mysqli_error($link); 
} 
mysqli_close($link); 
?> 