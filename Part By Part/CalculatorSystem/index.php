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
		<div class="container" >
			<div class="row justify-content-center">
				<div class="col-md-5 shadow">
					<br>
					<h1> PHP Calculator : </h1>
					<div class="card bg-info text-light">
						<div class="card-body ">
							<h5>Output Display :</h5>
							<?php
							if ($_SERVER["REQUEST_METHOD"] == "POST"){
								if ($_POST['NumberOne']
									&& $_POST['NumberTwo']) {
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
									else{
										echo "Please Enter Your Number";
									}
								}
							}
							?>
						</div>
					</div>
					<br>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						<!-- Number One input -->
						<div class="form-outline mb-4">
							<input type="Number" name="NumberOne" id="NumberOne" class="form-control" />
							<label class="form-label" for="NumberOne">Number One</label>
						</div>
						<!-- Number Two input -->
						<div class="form-outline mb-4">
							<input type="Number" name="NumberTwo" id="NumberTwo" class="form-control" />
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