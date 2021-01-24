<?php
require_once 'session/session.php';
require_once 'include/header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			
			<div class="card">
				<div class="card-header">
					Change  Your  Password
				</div>
				<div class="card-body">
					<h5 class="card-title"></h5>
					<form action="ChangePassword_post.php" method="post">
						
						<?php
						if (isset($_SESSION['Password_change_success'])) {
							
						?>
						<!-- seccess masage -->
						<div class="alert alert-success">
							<?=$_SESSION['Password_change_success'];?>
						</div>

						<?php
						unset($_SESSION['Password_change_success']);
						}
						?>





						



						<?php
						if (isset($_SESSION['Confirm_Password_not_match'])) {
							
						?>
						<!-- seccess masage -->
						<div class="alert alert-danger">
							<?=$_SESSION['Confirm_Password_not_match'];?>
						</div>

						<?php
						unset($_SESSION['Confirm_Password_not_match']);
						}
						?>



						<div class="form-group">
							<label for="OldPassword">Old Password</label>
							<input type="hidden" name="id" class="form-control form-control-sm" id="id" placeholder="Enter Your Name" value="<?=$_SESSION['id']?>">
							<input type="OldPassword" name="OldPassword" class="form-control form-control-sm" id="Name" placeholder="Enter Your Old Password" >
						</div>


						<div class="form-group">
							<label for="NewPassword">New Password</label>
							
							<input type="NewPassword" name="NewPassword" class="form-control form-control-sm" id="NewPassword" placeholder="Enter Your New Password">
						</div>		

						<div class="form-group">
							<label for="ConfirmPassword">Confirm Password</label>
							
							<input type="Password" name="ConfirmPassword" class="form-control form-control-sm" id="ConfirmPassword" placeholder="Enter Your Confirm Password">
						</div>





						<button type="submit" class="btn btn-sm  btn-outline-primary">Change</button>
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