<?php 
	$mailError = "";
	$email = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['email'] == null){
			$mailError = "email is empty....";
		}else{
			$email = $_REQUEST['email'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_2</title>
</head>

<body>
    <fieldset style="display: inline-block">
        <legend>Email</legend>
        <form action="" method="POST">
            Email <br>
            <input type="email" name="email" value="<?=$email?>"> <br>
            <hr>
            <input type="submit" name="submit" value="submit">
            <b>Email = </b><?=$email?>
        </form>
    </fieldset>
</body>

</html>