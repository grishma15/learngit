<?php
$conn = mysqli_connect('localhost','root','','insert2');
if (isset($_POST["submit"])) {
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$username = $_POST['uid'];
	$password = $_POST['pwd'];
	$id = $_POST['id'];


	mysqli_query($conn,"UPDATE `users` SET id='$id',firstname='$firstname',lastname='$lastname',username='$username',password='$password' WHERE id=$id");	
	header("location:index.php");
}
// 

?>
<?php 
$id = $_GET['id'];
	// $result = mysqli_query($conn,"UPDATE `users` SET id='$id',firstname='$firstname',lastname='$lastname',username='$username',password='$password' WHERE id=$id");
$result = mysqli_query($conn,"SELECT * FROM users left join articles on users.id=articles.user_id WHERE users.id=$id ");
while ($row=mysqli_fetch_array($result)) { ?>
	<table>
		<form method="post">
			<tr>
				<td><label>Firstname</label></td>
				<td><input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
					<input type="text" name="fname" value="<?php echo $row["firstname"]; ?>">
				</td>
			</tr>
			<br>
			<tr>
				<td><label>Lastname</label></td>
				<td><input type="text" name="lname" value="<?php echo $row["lastname"]; ?>"></td>
			</tr>
			<br>
			<tr>
				<td><label>Username</label></td>
				<td><input type="text" name="uid" value="<?php echo $row["username"]; ?>"></td>
			</tr>
			<br>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="pwd" value="<?php echo $row["password"]; ?>"></td>
			</tr>
			<br>
			<tr>
				<td><label>Message</label></td>
				<td><textarea name="message" placeholder="Enter...."><?php echo $row["message"]; ?></textarea></td>
			</tr>
			<br>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</form>
	</table>		
<?php	}
?>
