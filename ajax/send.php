<?php
include_once ('connect.php');
$name = htmlspecialchars($_REQUEST['user_name']);
$email = htmlspecialchars($_REQUEST['user_mail']);
$homepage = htmlspecialchars($_REQUEST['user_link']);
$text = htmlspecialchars($_REQUEST['user_text']);
$IP = $_SERVER['REMOTE_ADDR'];
$browser =  $_SERVER['HTTP_USER_AGENT'];
$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO `info` (name, email, homepage, text, IP, browser, date) values(?, ?, ?, ?, ?, ?, ?);";
$statement = $DBH->prepare($sql);
$statement->execute(array($name, $email, $homepage, $text, $IP, $browser, $date));
