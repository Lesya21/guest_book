<?php
include_once ('connect.php');

$sqlInsert = "INSERT INTO `info` (name, email, homepage, text, IP, browser, date) values(?, ?, ?, ?, ?, ?, ?);";
$statement = $DBH->prepare($sqlInsert);

$data = $DBH->query("SELECT * FROM info")->fetchAll();