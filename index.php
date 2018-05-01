<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple File Upload</title>
	<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>	
<style>
    .login-panel {
    	display: block;
        margin-top: 100px;
        margin-left: 20%;

         }

        .center-block {
  display: block;
  margin-left: 40%;
  margin-right: 100px;
}
.center-block2 {
  display: block;
  margin-left: 30%;
  margin-right: 100px;
  margin-top: 5%;
}


</style>

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


	


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                
                <div class="panel-body">
                    <form role="form" method="post" action="upload.php" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Select" name="file" type="file" autofocus>
                            </div>
                            


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Upload" name="btn-upload" >



                            <!-- Change this to a button or input when using this as a form -->
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<label class="center-block2">Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>



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
        
        <?php
	}
	?>
</div>
<div id="footer">
<label class="center-block" >By @mevinod.com</a></label>
</div>
</body>
</html>