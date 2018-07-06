<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "guestbook";

$link = mysqli_connect($host, $user, $password, $database) 
	or die("Ошибка " . mysqli_error($link));
?>
