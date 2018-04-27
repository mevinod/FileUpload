<?php
$connection = mysqli_connect('localhost','root','');
if (!$connection){
	die("Database connection failed" . mysqli_error($connection));
}
$db=mysql_select_db($connection, 'uploads');

if(!$db){
	die("Schema selection error" . mysql_error($connection));
}
