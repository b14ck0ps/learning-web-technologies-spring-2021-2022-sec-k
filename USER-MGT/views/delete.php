<?php 
	require_once('../controllers/header.php');
	$user = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete user</title>
</head>
<body>
	<center>
	<a href='../controllers/delete.php?id=<?=$user?>&delete=del'> Confirm Delete </a> | <a href="../views/userlist.php">Cancle</a>
	</center>
</body>
</html>