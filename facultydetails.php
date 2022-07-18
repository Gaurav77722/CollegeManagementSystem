<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Class</th>
<th>Years Of Experience</th>
<th>Gender</th>
<th>DOB</th>
<th>Email</th>
<th>Address</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root","", "faculty");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM faculty";
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["lastname"] . "</td><td>"
. $row["class"]. "</td><td>". $row["YearsOfExperience"]. "</td><td>". $row["gender"]. "</td><td>". $row["DateOfBirth"]. "</td><td>". $row["email"]. "</td><td>". $row["address"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>