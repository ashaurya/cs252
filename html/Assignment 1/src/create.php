<?php

require 'database.php';

$back = '<a href="../index.php">Click here to go back...</a>';


if($_REQUEST['name'] == "" || $_REQUEST['dob'] == "" || $_REQUEST['roll'] == "" || $_REQUEST['reg'] == "" || $_REQUEST['cpi'] == "") {
echo 'All fields required<br>';

}

else
{
	if ($row['CPI'] < 2)
		$grade = 'F';
	else if ($row['CPI'] < 4)
		$grade = 'E';
	else if ($row['CPI'] < 6)
		$grade = 'D';
	else if ($row['CPI'] < 8)
		$grade = 'C';
	else if ($row['CPI'] < 10)
		$grade = 'B';
	else
		$grade = 'A';

$sql = "INSERT INTO ass1tb VALUES ('".$_REQUEST['name']."', '".$_REQUEST['dob']."', '".$_REQUEST['roll']."', '".$_REQUEST['reg']."', '".$_REQUEST['cpi']."', '".$grade."', '')";

//echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

echo $back;

$conn->close();

?>
