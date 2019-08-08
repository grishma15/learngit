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


</html>
