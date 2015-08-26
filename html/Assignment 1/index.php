<?php
header('Content-type: application/json');
echo $_REQUEST['q']." Entry".'</h4> </div><div class="modal-body" align="left">';


if($_REQUEST['q'] == 'Create')
{
	echo '
	<form id="create-form" action="" method="post">
	Name: <input type="text" name="NAME" value="Someone" required><br>
	Date of Birth: <input type="text" name="DOB" value="2015-08-26"><br>  
	Roll No. : <input type="text" name="ROLL" value="0" required><br>
	Registration Number  :  <input type="text" name="REG" value="0" required><br>
	CPI :  <input type="text" name="CPI" value="8" required>
	</form>';
}

echo '</div>';




?>
