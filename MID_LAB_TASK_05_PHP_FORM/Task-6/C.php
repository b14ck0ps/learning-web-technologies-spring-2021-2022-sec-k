<?php 
$blood = "";
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['grp'] == null){
			echo "Select a blood";
		}else{
			$blood = $_REQUEST['grp'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_6</title>
</head>
<body>
    Blood Group
    <form action="" method="post">
    <select name="grp" id="">
        <option value="A+" <?php if (isset($_POST['submit']) && $_POST['grp'] == 'A+')  echo ' selected';?> >A+</option>
        <option value="A-" <?php if (isset($_POST['submit']) && $_POST['grp'] == 'A-')  echo ' selected';?> >A-</option>
        <option value="B+" <?php if (isset($_POST['submit']) && $_POST['grp'] == 'B+')  echo ' selected';?> >B+</option>
        <option value="B-"  <?php if (isset($_POST['submit']) && $_POST['grp'] == 'B-')  echo ' selected';?> >B-</option>
        <option value="O+" <?php if (isset($_POST['submit']) && $_POST['grp'] == 'O+')  echo ' selected';?> >O+</option>
        <option value="O-" <?php if (isset($_POST['submit']) && $_POST['grp'] == 'O-')  echo ' selected';?>  >O-</option>
        <option value="AB+" <?php if (isset($_POST['submit']) && $_POST['grp'] == 'AB+')  echo ' selected';?> >AB+</option>
        <option value="AB-" <?php if (isset($_POST['submit']) && $_POST['grp'] == 'AB-')  echo ' selected';?> >AB-</option>
    </select>
    
    <hr style="margin-left:0; max-width: 140px;">
    <input type="submit" name="submit" value="Submit">
    <b>Blood Group = </b> <?=$blood; ?>
    </form>
</body>
</html>