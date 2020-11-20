<?php

$server = 'localhost:3306';
$username = 'jymi';
$password = 'jymi';
$database = 'jorge';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
