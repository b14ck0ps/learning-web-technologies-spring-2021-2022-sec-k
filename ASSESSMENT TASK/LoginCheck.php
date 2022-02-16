<?php 
	session_start();
	if(isset($_REQUEST['login'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if(!is_null($username) && !is_null($password)){
			$user = $_SESSION['user'];
			if($user['username'] == $username && $user['password'] == $password){
				$_SESSION['status'] = true;
				if(isset($_REQUEST['remember'])){
					setcookie('status', 'true', time() + 3600, '/');
					setcookie(session_name(),session_id(),time()+ 3600);
				}else{
					setcookie('status',true);
				}
				header('location: ./Dashboard.php');
			}else{
				echo "invalid user..";
			}
		}else{
			echo "null submission";
		}
	}
?>
