<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<title>My PHP Learn</title>
		<!--  Font awesome -->
		<link rel="stylesheet" href="css/all.min.css" />
		<!-- MDB -->
		<link rel="stylesheet" href="css/mdb.min.css" />
		<!-- Font family -->
		<link rel="stylesheet" href="css/Rajdhani.css" />
		<!-- Custom styles -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-5 shadow mt-5">
					<br>
					<h1> PHP Calculator : </h1>
					<div class="card bg-info text-light">
						<div class="card-body ">
							<h5>Output Display :</h5>
							<?php
							if ($_SERVER["REQUEST_METHOD"] == "POST"){
								if ($_POST['NumberOne'] && $_POST['NumberTwo']) {
									if (filter_var($_POST['NumberOne'],FILTER_VALIDATE_INT) && filter_var($_POST['NumberTwo'],FILTER_VALIDATE_INT) ) {
										if (isset($_POST['add'])) {
											$result = $_POST['NumberOne'] + $_POST['NumberTwo'];
											echo "Your Result : ".$result."<br>";
										}
										else if (isset($_POST['sub'])) {
											$result = $_POST['NumberOne'] - $_POST['NumberTwo'];
											echo "Your Result : ".$result."<br>";
										}
										else if (isset($_POST['mul'])) {
											$result = $_POST['NumberOne'] * $_POST['NumberTwo'];
											echo "Your Result : ".$result."<br>";
										
										}
										else if (isset($_POST['div'])) {
										$result = $_POST['NumberOne'] / $_POST['NumberTwo'];
											echo "Your Result : ".$result."<br>";
										}
										else if (isset($_POST['mod'])) {
											$result = $_POST['NumberOne'] % $_POST['NumberTwo'];
											echo "Your Result : ".$result."<br>";
										}
										else if (isset($_POST['Percentange'])) {
											$result = $_POST['NumberOne'] * $_POST['NumberTwo'] / 100;
												echo "Your Result : ".$result;
										}
									}
									else{
										echo "Please Provided Integer Number :";
									}
								}
								else{
									echo "Please Enter Your Number :";
								}
							}
							?>
						</div>
					</div>
					<br>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						<!-- Number One input -->
						<div class="form-outline mb-4">
							<input type="text" name="NumberOne" id="NumberOne" class="form-control" />
							<label class="form-label" for="NumberOne">Number One</label>
						</div>
						<!-- Number Two input -->
						<div class="form-outline mb-4">
							<input type="text" name="NumberTwo" id="NumberTwo" class="form-control" />
							<label class="form-label" for="NumberTwo">Number Two</label>
						</div>
						<!-- Submit button -->
						<button type="submit" name="add" class="btn btn-outline-info"> + </button>
						<button type="submit" name="sub" class="btn btn-outline-info"> - </button>
						<button type="submit" name="mul" class="btn  btn-outline-info"> * </button>
						<button type="submit" name="div" class="btn  btn-outline-info"> / </button>
						<button type="submit" name="mod" class="btn btn-outline-info"> % </button>
						<button type="submit" name="Percentange" class="btn  btn-outline-info">*/100</button>
						<br>
						<br>
					</form>
				</div>
			</div>
		</div>
		<!-- MDB -->
		<script type="text/javascript" src="js/mdb.min.js"></script>
		<!-- Custom scripts -->
		<script type="text/javascript"></script>
	</body>
</html>