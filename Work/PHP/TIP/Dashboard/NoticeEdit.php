<?php require_once 'require/header.php'; ?>
<?php require_once '../Database/Database.php'; ?>
<?php
$id = $_GET['id'];
$single_data_notice = "SELECT * FROM noticetable WHERE id = $id ";
$get_single_data_notice = mysqli_query($db_connect, $single_data_notice);
// print_r($get_single_data_notice);
$after_get_single_data_notice=  mysqli_fetch_assoc($get_single_data_notice);
// print_r($after_get_single_data_notice);
?>
<div class="row justify-content-center">
	<div class="col-md-7">
		<div class="tile">
			<h3 class="tile-title text-center">Edit NOTICE</h3>
			<hr style="padding: .50px; background: #b70000;">
			<div class="tile-body">
				<form class="form-horizontal" action="NoticeEdit_Post.php" method="post">
					<div class="form-group row">
						<label class="control-label col-md-3">Date</label>
						<div class="col-md-8">
							<input class="form-control" name="Noticeid" type="hidden" value="<?=$after_get_single_data_notice['id']?>">
							
							<input class="form-control" name="NoticeDate" type="date" placeholder="Enter Full Date" value="<?=$after_get_single_data_notice['Notice_Date']?>">
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3">Notice Title</label>
						<div class="col-md-8">
							<input class="form-control" name="NoticeTitle" type="text" placeholder="Enter Your Notice Title" value="<?=$after_get_single_data_notice['Notice_Title']?>">
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3">Massage</label>
						<div class="col-md-8">
							<textarea class="form-control" name="NoticeMassage" rows="5" placeholder="Enter Your Massage" ><?=$after_get_single_data_notice['Notice_Massage']?></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<button class="btn btn-outline-info " type="submit">Edit</button>
					</div>
				</form>
			</div>
			
			
			<!--      <div class="tile-footer">
			</div>
		-->
	</div>
</div>
</div>
<?php require_once 'require/footer.php'; ?>