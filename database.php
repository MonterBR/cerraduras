<?php

$server = 'localhost';
$username = 'u515330490_bra';
$password = '7b5df43BM';
$database = 'u515330490_login';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
