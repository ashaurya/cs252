<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>
<br>
<div align="center">

<?php
require 'database.php';

$sql = "SELECT * FROM ass1tb";
$result = $conn->query($sql);

echo "<table border='1' id= results>
<tr>
<th>ID</th>
<th>Name</th>
<th>Roll No.</th>
<th>Reg No.</th>
<th>Date of Birth</th>
<th>CPI</th>
<th>Grade</th>
</tr>";

while($row = $result->fetch_assoc())
{
	echo "<tr>"; 
	echo "<td>".$row['ID']."</td>";
	echo "<td>".$row['NAME']."</td>";
	echo "<td>".$row['ROLL']."</td>";
	echo "<td>".$row['REG']."</td>";
	echo "<td>".$row['DOB']."</td>";
	echo "<td>".$row['CPI'] ."</td>";
	echo"<td>". $row['GRADE']."</td>";
	echo "</tr>";
}
echo "</table>";

$conn->close();
?>

</div>
<br><hr>
<div align="center">
<a href="../index.php">Clicl here to go back...</a>
</div>

</body>

</html>
