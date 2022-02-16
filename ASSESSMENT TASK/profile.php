<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Home</title>
</head>

<body>
    <table border="2" style="border-collapse: collapse;" width="100%">
        <tr style="border: 2px solid black;">
            <td style="border-right: 0px solid">
                <img src="https://i.ibb.co/Sm8cSr0/image.png" alt="logo"></a>
            </td>
            <td style="padding:12px; border-bottom: 5px single black collapse; border-left: 0px solid; text-align: right">
                Logged in as
                <a href="./profile.php">Bob</a> |
                <a href="./logout.php">Logout</a>
            </td>
        </tr>
        <tr style="border: 2px solid black;">
            <td style="border: 2px solid black; width: 30%;">
                <b>Account</b> <br>
                <hr>
                <ul>
                    <li><a href="Dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="change_dp.php">Change Profile Picture</a></li>
                    <li><a href="change_password.php">Chnage Password</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </td>
            <td colspan="2" style="vertical-align: middle; text-align: left;padding: 5px;">
                <fieldset>
                    <legend>PROFILE</legend>
                    <table>
                        <tr>
                            <td style="border-bottom: 1px solid gray;">
                                Name
                            </td style="border-bottom: 1px solid gray;">
                            <td style="border-bottom: 1px solid gray;">
                                :Bob
                            </td>
                            <td style="text-align: center; padding-left: 10px;" rowspan="3">
                                <img src="https://i.ibb.co/SyWBnFb/image.png" alt="image" border="0"> <br>
                                <a href="change_dp.php">Change</a>
                            </td>
                        </tr>

                        <tr>
                            <td style="border-bottom: 1px solid gray;">
                                Email
                            </td>
                            <td style="border-bottom: 1px solid gray;">
                                :bob@aiub.edu
                            </td>
                        </tr>

                        <tr>
                            <td style="border-bottom: 1px solid gray;">
                                Gender
                            </td>
                            <td style="border-bottom: 1px solid gray;">
                                :Male
                            </td>
                        </tr>

                        <tr>
                            <td style="border-bottom: 1px solid gray;">
                                Date of Birth
                            </td>
                            <td style="border-bottom: 1px solid gray;">
                                : 19/09/1998
                            </td>
                            <td style="border-bottom: 1px solid gray;"></td>
                        </tr>

                    </table>
                </fieldset>
            </td>
        </tr>
        </tr>
        <tr style="border: 2px solid black;">
            <td colspan="2" style="border:none; text-align: center">
                Copyright &copy; 2017
            </td>
        </tr>
    </table>
</body>

</html>