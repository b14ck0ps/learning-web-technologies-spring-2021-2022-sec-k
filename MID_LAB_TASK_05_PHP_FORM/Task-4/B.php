<?php 
$gender = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['gender'] == null){
			echo "Select a gender";
		}else{
			$gender = $_REQUEST['gender'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_4</title>
</head>
<body>
    <fieldset style="display: inline-block">
        <legend>Gender</legend>
        <form action="" method="post">
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="other"> Other
    </fieldset> <br>
    <input type="submit" name="submit" value="submit">
    <b>Gender = </b> <?=$gender?>
    </form>
</body>
</html>