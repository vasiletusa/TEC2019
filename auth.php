<?php

session_start();
if(!isset($_SESSION["usernameU"])or(!isset($_SESSION["usernameA"]))){
header("Location: login.php");

exit(); }
?>