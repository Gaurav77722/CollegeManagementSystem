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
<th>Previos School</th>
<th>School Address</th>
<th>Last Attended</th>
<th>Course</th>
<th>Year</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root","", "register");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM eduregister";
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . $row["prevschool"]. "</td><td>" . $row["schooladdress"] . "</td><td>"
. $row["lastattended"]. "</td><td>". $row["course"]. "</td><td>". $row["courseyear"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>