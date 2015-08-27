<?php
header('Content-type: application/json');
echo $_REQUEST['q']." Entry".'</h4> </div><div class="modal-body" align="left">';

$servername = 'localhost';
$username = 'root';
$password = 'y8qo3iw';
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
	<input type="text" name="NAME" placeholder="Your Name" required><br>
	Date of Birth:<br>
	<input type="date" name="DOB" max="1979-12-31" min="2015-08-26"><br>  
	Roll Number:<br>
	<input type="number" name="ROLL" placeholder="Roll Number" required><br>
	Registration Number:<br>
	<input type="text" name="REG" placeholder="Registration Number" required><br>
	CPI:<br>
	<input type="number" min="0" max="10" step="0.1" name="CPI" placeholder="0 - 10" required>
	</form>';

	echo '
	<div class="modal-footer">
	<button type="button" class="btn btn-default" onclick="insert()" id="insert-btn">Create</button>
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
	<button type="button" class="btn btn-default" onclick="read()" id="insert-btn">Read</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>



	';




}

else if($_REQUEST['q'] == 'Update')
{
	echo '
	Function Unavailable at this time';

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
	<button type="button" class="btn btn-default" onclick="delete()" id="insert-btn">Update</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>



	';




}

$conn->close();

echo '</div>';




?>
