<?php
	// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	// 	$uri = 'https://';
	// } else {
	// 	$uri = 'http://';
	// }
	// $uri .= $_SERVER['HTTP_HOST'];
	// header('Location: '.$uri.'/dashboard/');
	// exit;
?>
<!-- Something is wrong with the XAMPP installation :-( -->
<?php 
if (isset($_POST['submit'])) {
	$conn = mysqli_connect('localhost','root','','insert2');
	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$username = $_POST['uid'];
	$password = $_POST['pwd'];
	$message = $_POST['message'];

	$sql = "INSERT INTO users(firstname,lastname,username,password) VALUES('$firstname','$lastname','$username','$password')";
	$query = mysqli_query($conn,$sql);
		$last_id = $conn->insert_id;
	

	if ($query) {
		$sql2 = "INSERT INTO articles(user_id,message) VALUES('$last_id','$message')";
		$result = mysqli_query($conn,$sql2);
		echo "successfully submitted";
	} else {
		echo "ERROR in submitted";
	}
	// header("refresh:2");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
	<table>
		<form method="post">
		<tr>
			<td><label>Firstname</label></td>
			<td><input type="text" name="fname"></td>
		</tr>
		<br>
		<tr>
			<td><label>Lastname</label></td>
			<td><input type="text" name="lname"></td>
		</tr>
		<br>
		<tr>
			<td><label>Username</label></td>
			<td><input type="text" name="uid"></td>
		</tr>
		<br>
		<tr>
			<td><label>Password</label></td>
			<td><input type="password" name="pwd"></td>
		</tr>
		<br>
		<tr>
			<td><label>Message</label></td>
			<td><textarea name="message" placeholder="Enter...."></textarea></td>
		</tr>
		<br>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</form>
	</table>
</body>
<?php 
	$conn = mysqli_connect('localhost','root','','insert2');

	$sel_query = "SELECT * FROM users";
	$res = mysqli_query($conn,$sel_query);
?>
<table border="1">
	<th>#</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>User Name</th>
	<!-- <th>Message</th> -->
	<th>Action</th>
	<?php while ($row = mysqli_fetch_assoc($res)) { ?>
		<tr>
			<td><?php echo $row["id"]; ?></td>
			<td><?php echo $row["firstname"]; ?></td>
			<td><?php echo $row["lastname"]; ?></td>
			<td><?php echo $row["username"]; ?></td>
			<!-- <td><?php echo $row["message"]; ?></td> -->
			<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete </a>/<a href="update.php?id=<?php echo $row['id']; ?>"> Update</a></td>
		</tr>	
<?php	} ?>
</table>
</html>
