<?php
	$conn = mysqli_connect('localhost','root','','insert2');
	$id = $_GET['id'];
	// $sql = "DELETE FROM company WHERE id=$id";
$sql = "DELETE FROM `users` WHERE id=$id";
$status = mysqli_query($conn,$sql);
header("location:index.php");
?>