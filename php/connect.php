<?php

$host = 'localhost'; // 127.0.0.1
$port = '5432'; // MySQL: 3306
$dbname = 'DB_Testing';
$user = 'postgres';
$password = 'postgres';

try {
  // Create string DSN (Data Source Name)
  // If using MySQL database, change pgsql to mysql
  $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

  // Create objek PDO
  $pdo = new PDO($dsn, $user, $password);

  // Set PDO attributes for error mode
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Connecton Success.\n";
} catch (PDOException $e) {
  // Handle connection errors
  echo "A connection error occurred: " .$e->getMessage();
}
