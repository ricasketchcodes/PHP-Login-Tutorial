<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "test_db";

$conn = mysqli_connect($host, $user, $pass, $db);

session_start();

error_reporting(0);
?>