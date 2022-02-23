<?php
session_start();
$data = file('../models/user.txt');
$username = null;
$password = null;
$email = null;
	$username = $_REQUEST['username'];
		$data = array_map('replace_user_info', $data);
		$tmp = '../models/user.tmp';
		$user = '../models/user.txt';
		file_put_contents($tmp, implode('', $data));
		rename($tmp, $user);
	header('location: ../views/userlist.php');

function replace_user_info($data)
{
	global $username;
	if (stristr($data, $username)){
		return "";
	}
	return $data;
}
