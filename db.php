<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'computer';
global $conn;
$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
