<?php 
require_once('connect.php');
if(isset($_FILES) & !empty($_FILES)){
	$name = $_FILES['profile']['name'];
	$size = $_FILES['profile']['size'];
	$type = $_FILES['profile']['type'];
	$tmp_name = $_FILES['profile']['tmp_name'];
}
$location = "uploads/";
$maxsize = 10000000;
if(isset($name) &!empty($name)){
	if($type == "image/jpeg" && $size <= $maxsize){
		if(move_uploaded_file($tmp_name, $location.$name)){
			
			echo $sql = "INSERT INTO `upload` (name, size, type, location) VALUES ('$name', '$size', '$type', '$location$name')";
			$res = mysqli_query($connection, $sql);
			if($res){
				echo "Uploaded successfully";
			}
		}else{
			echo "Failed to Upload";
		}
	}else{
		echo "File should be jpeg image & only 100 kb in size";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple File Upload</title>
	<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="F" src="filetype-docs-icon (1).png">
      </a>
    </div>
  </div>
</nav>

<div class="page-header">
  <h1>Simple File Upload Systm</h1>
</div>

<div class="container">
	<div class="row">
		<form class="col-md-6 col-md-offset-3" method="post" enctype="multipart/form-data">

		  <div class="form-group">
		    <label for="exampleInputFile">File input</label>
		    <input type="file" name="profile" id="exampleInputFile">
		    <p class="help-block">Example block-level help text here.</p>
		  </div>

		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>
</body>
</html>