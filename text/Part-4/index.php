<?php require_once 'include/header.php'; ?>


    <?php



   $fast = 40;

   $last = 10;


   $resultsum = $fast + $last;
   $resultsub = $fast - $last;
   $resultmul = $fast * $last;
   $resultdiv = $fast / $last;
   $resultmod = $fast % $last;

	echo $resultsum."<br>";

	echo $resultsub."<br>";

	echo $resultmul."<br>";

	echo $resultdiv."<br>";

	echo $resultmod."<br>";
 

 
    ?>

<?php require_once  'include/footer.php'; ?>