<?php 
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['degree'] == null){
			echo "Select a degree";
		}else{
			$degree = $_REQUEST['degree'];
			echo "Degree = ".$degree;
		}
	}
?>