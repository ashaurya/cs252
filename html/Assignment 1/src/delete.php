<!DOCTYPE html>
<html>
<head>


</head>

<body>
<?php
require 'database.php';

$sql = "DELETE FROM ass1tb WHERE ROLL=".$_REQUEST['q'];

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully or already deleted.";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<br>
</body>
<a href="../index.php">Click here to go back...</a>

</html>
