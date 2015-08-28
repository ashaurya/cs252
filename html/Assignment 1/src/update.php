<!DOCTYPE html>
<html>
<head>


</head>

<body>
<?php
require 'database.php';

$sql = "SELECT * FROM ass1tb WHERE ROLL=".$_REQUEST['q'];
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();
?>
<div align="center">
<h2>Update Entry</h2>
</div>
<hr>
<br>
<form id="create-form" action="update_action.php?q=<?php echo $_REQUEST['q']; ?>" method="post">
Name:
<input id="form-name" type="text" name="NAME" value="<?php echo $row['NAME']; ?>" required><br>
Date of Birth:
<input id="form-dob" type="date" name="DOB" value="<?php echo $row['DOB']; ?>" min="1979-12-31" max="2015-01-01"><br>  
Roll Number:
<input id="form-roll" type="number" name="ROLL" value="<?php echo $row['ROLL']; ?>" disabled required><br>
Registration Number:
<input id="form-reg" type="text" name="REG" value="<?php echo $row['REG']; ?>" required><br>
CPI:
<input id="form-cpi" type="number" min="0" max="10" step="0.1" name="CPI" value="<?php echo $row['CPI']; ?>" required>
<input type="submit" value="Submit"></input>
</form>
<br><hr>
</body>
<a href="../index.php">Click here to go back...</a>

</html>
