<?php
if ($_POST['num_One'] &&  $_POST['num_Two']) {
	if( filter_var($_POST['num_One'], FILTER_VALIDATE_INT) && filter_var($_POST['num_Two'], FILTER_VALIDATE_INT)){
		if (isset($_POST['add'])) {
			echo $_POST['num_One'] +  $_POST['num_Two'];
		}
		elseif (isset($_POST['sub'])) {
			echo $_POST['num_One'] -  $_POST['num_Two'];
		}
		elseif (isset($_POST['mul'])) {
			echo $_POST['num_One'] *  $_POST['num_Two'];
		}
		elseif (isset($_POST['div'])) {
			echo $_POST['num_One'] /  $_POST['num_Two'];
		}
		elseif (isset($_POST['mod'])) {
			echo $_POST['num_One'] %  $_POST['num_Two'];
		}
	}
	else{
		echo "Give Me Int number";
	}
}
else{
	echo "Please Enter Your Numbers";
}
?>