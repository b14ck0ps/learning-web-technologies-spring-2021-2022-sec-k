<?php
// require('../controllers/header.php');
function get_userinfo($user)
{
    $file = fopen('../models/user.txt', 'r');
    while (!feof($file)) {
        $users = fgets($file);
        $userArry = explode('|', $users);
        if ($userArry[0] != null) {
            if ($userArry[0] == $user) {
                fclose($file);
                return $userArry;
            }
        }
    }
}
