<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    require_once('database.php');
    if(login($username , $password))
        header('location: profile.php');
    else
        echo "Wronge username or password";
}