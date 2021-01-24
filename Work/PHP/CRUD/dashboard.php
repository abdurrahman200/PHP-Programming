<?php require_once 'session/session.php'; ?>
<?php require_once 'include/header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			
			<div class="card">
				<div class="card-header">
					Dashboard
				</div>
				<div class="card-body">
					<h5 class="card-title">Hello ! <?= $_SESSION['name'] ?></h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				</div>
				<div class="card-footer text-muted">
					Design And DeveLopment &copy Abdur rahman Bangladesh
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'include/footer.php'; ?>