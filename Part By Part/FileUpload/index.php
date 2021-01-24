<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<strong>Select image to upload:</strong>
	<br>
	<br>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		
		<input type="text" name="title" id="title" placeholder="Title">
		
		<input type="file" name="fileUpload" id="file" placeholder="File">
		<button type="submit"> submit </button>
	</form>
</body>
</html>