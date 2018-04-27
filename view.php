<?php 
require_once('connect.php');
$sql = "SELECT * FROM `upload`";
$res = mysqli_query($connection, $sql);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple File Upload System in PHP & MySQL</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Size</th>
				<th>Type</th>
				<th>Location</th>
				<th>Delete</th>
			</tr>
			<?php 
				while ($r = mysqli_fetch_assoc($res)) {
			?>
			<tr>
				<td><?php echo $r['id']; ?></td>
				<td><?php echo $r['name']; ?></td>
				<td><?php echo $r['size']; ?></td>
				<td><?php echo $r['type']; ?></td>
				<td><?php echo $r['location']; ?></td>
				<td><a href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
</body>
</html>