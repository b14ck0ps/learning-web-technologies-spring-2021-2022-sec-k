<?php
session_start();
$data = file('../models/user.txt');
$username = null;
$password = null;
$email = null;
if (isset($_REQUEST['delete'])) {
	$id = $_REQUEST['id'];
	$file = fopen('../models/user.txt', 'r');
	$updatedContent = "";
	while (!feof($file)) {
		$line = fgets($file);
		$user = explode('|', $line);
		if ($user[0] != $id) {
			$updatedContent .= $line;
		}
	}
	$file = fopen('../models/user.txt', 'w');
	fwrite($file, $updatedContent);
	header('location: ../views/userlist.php');
}
