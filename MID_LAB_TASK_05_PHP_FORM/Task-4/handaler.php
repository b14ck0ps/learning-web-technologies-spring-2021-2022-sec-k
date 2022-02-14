<?php 
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['gender'] == null){
			echo "Select a gender";
		}else{
			$gender = $_REQUEST['gender'];
			echo "Gender = ".$gender;
		}
	}
?>