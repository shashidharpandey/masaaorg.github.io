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
<th>id</th>
<th>specilization</th>
<th>doctorName</th>
<th>address</th>
<th>docFees</th>
<th>contactno</th>
<th>docEmail</th>
<th>password</th>
<th>creationDate</th>
<th>updationDate</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, specilization, doctorName,address,docFees,contactno,docEmail,password,creationDate,Yourpincode  FROM hms";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["specilization"]. "</td><td>"
. $row["doctorName"]. "</td><td>" . $row["address"]. "</td><td>" . $row["docFees"] . "</td><td>" . $row["contactno"]. "</td><td>" . $row["docEmail"]. "</td><td>" . $row["password"].  "</td><td>" . $row["creationDate"]. "</td><td>" . $row["updationDate"].  "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>