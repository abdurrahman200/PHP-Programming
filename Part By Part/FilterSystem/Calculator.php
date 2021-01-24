<?php

// print_r(filter_list());

if ($_POST['NumberOne'] && $_POST['NumberTwo']) {

	if (filter_var($_POST['NumberOne'],FILTER_VALIDATE_INT) && filter_var($_POST['NumberTwo'],FILTER_VALIDATE_INT) ) {
		
		if (isset($_POST['add'])) {
			echo $_POST['NumberOne'] + $_POST['NumberTwo'];
		}
		else if (isset($_POST['sub'])) {
			echo $_POST['NumberOne'] - $_POST['NumberTwo'];
		}
		else if (isset($_POST['mul'])) {
			echo $_POST['NumberOne'] * $_POST['NumberTwo'];
		}
		else if (isset($_POST['div'])) {
			echo $_POST['NumberOne'] / $_POST['NumberTwo'];
		}
		else if (isset($_POST['mod'])) {
			echo $_POST['NumberOne'] % $_POST['NumberTwo'];
		}
		else if (isset($_POST['Percentange'])) {
			echo $_POST['NumberOne'] * $_POST['NumberTwo'] / 100;
		}

	}

	else{
		echo "Please Provided Integer Number";
	}

}
else{
	echo "Please Enter Your Number";
}



?>