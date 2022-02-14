<?php 
	$mailError = "";
	$email = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['email'] == null){
			$mailError = "email is empty....";
		}else{
			$email = $_REQUEST['email'];
			echo "email = ".$email;
		}
	}
?>