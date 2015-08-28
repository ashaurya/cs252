<?php
header('Content-type: application/json');
echo $_REQUEST['q']." Entry".'</h4> </div><div class="modal-body" align="left">';

$servername = 'localhost';
$username = 'root';
$password = 'toor';
$database = 'ass1db';
$conn = new mysqli($servername, $username, $password, $database);

/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";*/

if($_REQUEST['q'] == 'Create')
{
	echo '
	<form id="create-form" action="" method="post">
	Name:<br>
	<input id="form-name" type="text" name="NAME" placeholder="Your Name" required><br>
	Date of Birth:<br>
	<input id="form-dob" type="date" name="DOB" max="1979-12-31" min="2015-08-26"><br>  
	Roll Number:<br>
	<input id="form-roll" type="number" name="ROLL" placeholder="Roll Number" required><br>
	Registration Number:<br>
	<input id="form-reg" type="text" name="REG" placeholder="Registration Number" required><br>
	CPI:<br>
	<input id="form-cpi" type="number" min="0" max="10" step="0.1" name="CPI" placeholder="0 - 10" required>
	</form>';

	echo '
	<div class="modal-footer">
	<button type="button" class="btn btn-default" onclick="create()" id="insert-btn">Create</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>



	';
}

else if($_REQUEST['q'] == "Read")
{
	echo '
	Search with Roll No.<br>
	<form><select class="btn" disabled><option value="disabled">--Disabled--</option></select></form>';	

	echo '
	<div class="modal-footer">
	<button type="button" class="btn btn-default" onclick="read()" id="insert-btn">Show All</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>



	';




}

else if($_REQUEST['q'] == 'Update')
{
	$sql = "SELECT ROLL FROM ass1tb";
	$result = $conn->query($sql);

	echo '
	Search with Roll No.<br>
	<form id="delete-form" action="" method="post">
	<select required autofocus id="roll-del" class="btn" name="roll-del">';

	while($row = $result->fetch_assoc())
	{
		echo '<option value="'.$row["ROLL"].'" name="'.$row["ROLL"].'">'.$row["ROLL"].'</option>';
	}
	echo '</select>
	</form>';

	echo '
	<div class="modal-footer">
	<button type="button" class="btn btn-default" onclick="update()" id="insert-btn">Update</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>



	';

}

else if($_REQUEST['q'] == 'Delete')
{
	$sql = "SELECT ROLL,ID FROM ass1tb";
	$result = $conn->query($sql);

	echo '
	Search with Roll No.<br>
	<form id="delete-form" action="" method="post">
	<select required autofocus id="roll-del" class="btn" name="roll-del">';

	while($row = $result->fetch_assoc())
	{
		echo '<option value="'.$row["ROLL"].'" name="'.$row["ROLL"].'">'.$row["ROLL"].'</option>';
	}
	echo '</select>
	</form>';

	echo '
	<div class="modal-footer">
	<button type="button" class="btn btn-default" onclick="deletes()" id="insert-btn">Delete</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>



	';




}

$conn->close();

echo '</div>';




?>
