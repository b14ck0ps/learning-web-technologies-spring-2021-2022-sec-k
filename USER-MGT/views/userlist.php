<?php
require('../controllers/header.php');
?>

<html>

<head>
	<title>User List</title>
</head>

<body>

	<a href="home.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th>PASSWORD</th>
			<th>ACTION</th>
		</tr>
		<?php
		$file = fopen('../models/user.txt', 'r');
		while (!feof($file)) {
			$user = fgets($file);
			$userArry = explode('|', $user);
			if ($userArry[0] != null) {
				echo "<tr>";
				echo "<td>" . $userArry[0] . "</td>";
				echo "<td>" . $userArry[1] . "</td>";
				echo "<td>" . $userArry[2] . "</td>";
				echo "<td>" . $userArry[3] . "</td>";
				echo "<td>";
				echo "<a href='edit.php?id=" . $userArry[0] . "'> EDIT </a> | ";
				echo "<a href='../views/delete.php?id=" . $userArry[0] . "'> DELETE </a>";
				echo "</td>";
				echo "</tr>";
			}
		}
		?>
	</table>
	</fieldset>
	</form>
</body>

</html>