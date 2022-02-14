<?php 
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['dd'] == null || $_REQUEST['mm'] == null || $_REQUEST['yyyy'] == null){
			echo "ERROR Not all fields are filled";
		}else{
			$dd = $_REQUEST['dd'];
			$mm = $_REQUEST['mm'];
			$yyyy = $_REQUEST['yyyy'];
			echo "Date of birth: ".$dd."/".$mm."/".$yyyy;
		}
	}
?>