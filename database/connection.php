<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-munakahat";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo("<script>console.log('connection is on')</script>");
} catch (PDOException $e) {
	echo $e->getMessage();
}