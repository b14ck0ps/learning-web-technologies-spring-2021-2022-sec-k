<?php 
$degree = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['degree'] == null){
			echo "Select a degree";
		}else{
			$degree = $_REQUEST['degree'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_5</title>
</head>
<body>
    <fieldset style="display: inline-block">
        <legend>Degree</legend>
        <form action="" method="post">
        <input type="checkbox" name="degree" value="SSC"> SSC
        <input type="checkbox" name="degree" value="HSC"> HSC
        <input type="checkbox" name="degree" value="BSc"> BSc
    </fieldset><br>
    <input type="submit" name="submit" value="Submit">
    <b>Degree = </b> <?=$degree?>
    </form>
</body>
</html>