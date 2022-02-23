<?php
session_start();
$data = file('../models/user.txt');
$username = null;
$password = null;
$email = null;
if (isset($_REQUEST['edit'])) {
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$email = $_REQUEST['email'];
	if ($username != null && $password != null && $email != null) {
		$data = array_map('replace_user_info', $data);
		$tmp = '../models/user.tmp';
		$user = '../models/user.txt';
		file_put_contents($tmp, implode('', $data));
		rename($tmp, $user);
	}
	header('location: ../views/userlist.php');
}
function replace_user_info($data)
{
	global $username , $password , $email;
	if (stristr($data, $username)){
		return "$username|$password|$email\n";
	}
	return $data;
}
