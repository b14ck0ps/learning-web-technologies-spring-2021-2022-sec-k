<?php
session_start();
$data = file('../models/user.txt');
$username = null;
$password = null;
$email = null;
if (isset($_REQUEST['edit'])) {
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$id = $_REQUEST['id'];
	$email = $_REQUEST['email'];
	if ($username != null && $password != null && $email != null) {
		$file = fopen('../models/user.txt', 'r');
		$updatedContent = "";
		while (!feof($file)) {
			$line = fgets($file);
			$user = explode('|', $line);
			if ($user[0] == $id) {
				$line = $id . '|' . $username . '|' . $password . '|' . $email ."\r\n";
			}
			$updatedContent .= $line;
		}
	}
	$file = fopen('../models/user.txt', 'w');
	fwrite($file, $updatedContent);
	header('location: ../views/userlist.php');
}
