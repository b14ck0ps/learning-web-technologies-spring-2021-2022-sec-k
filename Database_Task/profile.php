<?php
session_start();
isset($_SESSION['status']) ? : header('location: login.html');
require_once('database.php');
$user = userinfo($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user profile</title>
</head>

<body>
    <table>
        <tr>
            <td>Username: </td>
            <td><?php echo $user['username'] ?></td>
        </tr>
        <tr>
            <td>First name: </td>
            <td><?php echo $user['first_name'] ?></td>
        </tr>
        <tr>
            <td>Last name: </td>
            <td><?php echo $user['last_name'] ?></td>
        </tr>
    </table>
</body>

</html>