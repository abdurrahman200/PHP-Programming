<?php require_once 'include/header.php'; ?>

	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-5">
				
				<form action="login_post.php" method="post">
					
					<div class="form-group">
						<label for="Email">Email</label>
						<input type="text" name="userEmail" class="form-control form-control-sm" id="Email" placeholder=" Email ">
					</div>
					<div class="form-group">
						<label for="Password">Password</label>
						<input type="text" name="userPassword" class="form-control form-control-sm" id="Password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-sm btn-block btn-outline-info">Sign in</button>
				</form>
			</div>
		</div>
	</div>

<?php require_once 'include/footer.php'; ?>