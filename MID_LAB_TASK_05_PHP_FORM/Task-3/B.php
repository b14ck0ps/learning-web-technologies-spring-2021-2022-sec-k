<?php 
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['dd'] == null || $_REQUEST['mm'] == null || $_REQUEST['yyyy'] == null){
			echo "ERROR Not all fields are filled";
		}else{
			$dd = $_REQUEST['dd'];
			$mm = $_REQUEST['mm'];
			$yyyy = $_REQUEST['yyyy'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_3</title>
</head>
<body>
    <fieldset style="display: inline-block">
        <legend>Date Of Birth</legend>
        <form action="" method="post">
        <table>
            <th>dd</th>
            <th>mm</th>
            <th>yyyy</th>
            <tr>
                <td>
                    <input type="text" name="dd" value="" maxlength="2" size="3"> <b>/</b>
                </td>
                <td>
                    <input type="text" name="mm" value="" maxlength="2" size="3"> <b>/</b>
                </td>
                <td>
                    <input type="text" name="yyyy" value="" maxlength="4" size="3">
                </td>
            </tr>
        </table>
        <hr>
        <input type="submit" name="submit" value="submit">
        <b>Date of birth = </b> <?=$dd."/".$mm."/".$yyyy?>
        </form>
    </fieldset>
</body>
</html>