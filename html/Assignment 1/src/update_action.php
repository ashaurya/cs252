<?php

require 'database.php';
$cpi = $_POST['CPI'];
if($cpi < 2) $grade = 'F';
else if($cpi < 4) $grade = 'E';
else if($cpi < 6) $grade = 'D';
else if($cpi < 8) $grade = 'C';
else if($cpi < 10) $grade = 'B';
else $grade = 'A';

//echo $_REQUEST['q'];

$sql = "UPDATE ass1tb SET NAME='".$_POST['NAME']."', DOB='".$_POST['DOB']."', REG='".$_POST['REG']."', CPI='".$_POST['CPI']."', GRADE='".$grade."' WHERE ROLL='".$_REQUEST['q']."'";

//echo $sql;

if ($conn->query($sql) === TRUE) {
	echo "<script> var result = confirm('Record updated successfully'); window.location.href = './update.php?q=".$_REQUEST['q']."'; </script>";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();


//header("Location: ./update.php?q=".$_REQUEST['q']);
//die();

?>
