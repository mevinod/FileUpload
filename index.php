<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple File Upload</title>
	<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <span><img alt="F" src="filetype-docs-icon (1).png"></span>Simple File Uploader
      </a>
    </div>
  </div>
</nav>

<div id="body">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
</div>
<div id="footer">
<label>By @mevinod.com</a></label>
</div>
</body>
</html>