<?php
require_once 'session/session.php';
require_once 'include/header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			
			<div class="card">
				<div class="card-header">
					Edit Your  Profile
				</div>
				<div class="card-body">
					<h5 class="card-title"></h5>
					<form action="edit_post.php" method="post">


						<?php
						if (isset($_SESSION['update_status'])) {
							
						?>
						<!-- seccess masage -->
						<div class="alert alert-success">
							Your Name hasbeen change
						</div>

						<?php
						unset($_SESSION['update_status']);
						}
						?>



						<div class="form-group">
							<label for="Name">Your Name</label>
							<input type="hidden" name="id" class="form-control form-control-sm" id="id" placeholder="Enter Your Name" value="<?=$_SESSION['id']?>">
							<input type="text" name="Name" class="form-control form-control-sm" id="Name" placeholder="Enter Your Name" value="<?=$_SESSION['name']?>">
						</div>
						<button type="submit" class="btn btn-sm  btn-outline-info">Change</button>
					</form>
					
				</div>
				<div class="card-footer text-muted">
					Design And DeveLopment &copy Abdur rahman Bangladesh
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'include/footer.php'; ?>