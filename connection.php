<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'bazzar';

$conn = mysqli_connect($hostName ,$userName,$password,$dbName);

if (!$conn) {
    die(json_encode(['message' => 'connection failed']));
}

return $conn;