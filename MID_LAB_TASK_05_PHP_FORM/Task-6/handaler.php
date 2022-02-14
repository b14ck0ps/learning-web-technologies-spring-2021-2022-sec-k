<?php 
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['grp'] == null){
			echo "Select a blood";
		}else{
			$blood = $_REQUEST['grp'];
			echo "Blood Group = ".$blood;
		}
	}
?>