<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP filter Check</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (filter_var($_POST['FilterCheck'], FILTER_SANITIZE_URL)) {
			echo $_POST['FilterCheck'];
		}
		else {
			echo "hoi nai";
		}
	}
	?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="text" name="FilterCheck">
		<button type="submit"> Check </button>

	</form>


</body>
</html>