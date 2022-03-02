<?php 
	require_once('../controllers/header.php');
	require_once('../controllers/userinfo.php');
	$user = get_userinfo($_REQUEST['id']);
?>

<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<a href="userlist.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controllers/editUser.php">
		<input type="hidden" name="id" value="<?=$user[0]?>">
		<fieldset>
			<legend>Edit User</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?=$user[1]?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?=$user[2]?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?=$user[3]?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="Update"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>