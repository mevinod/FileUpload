<?php
require_once('connect.php');
if(isset($_GET) & !empty($_GET)){
	$id = $_GET['id'];
	$sql = "SELECT * FROM `upload` WHERE id=$id";
	$res = mysqli_query($connection, $sql);
	$r = mysqli_fetch_assoc($res);
	if(unlink($r['location'])){
		$delsql = "DELETE FROM `upload` WHERE id=$id";
		if(mysqli_query($connection, $delsql)){
			header('location: view.php');
		}
	}
}
