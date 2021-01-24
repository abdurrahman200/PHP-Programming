<?php require_once 'include/header.php'; ?>
	<?php
	// function declaretion
		function add($numone,$numtwo)
		{
			echo $numone+$numtwo;
			echo "<br>";
			echo $numone-$numtwo;
			echo "<br>";
			echo $numone*$numtwo;
			echo "<br>";
			echo $numone/$numtwo;
			echo "<br>";
			echo $numone%$numtwo;
			echo "<br>";

			
		}

		// call
		add(5,20);
	
		
	?>
<?php require_once  'include/footer.php'; ?>