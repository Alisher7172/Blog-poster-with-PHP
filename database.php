<?php
// Database connection bootstrap
// Exports:
// - $pdo: PDO instance or null on failure
// - $db_error: string error message if connection fails (not echoed here)

$servername = "127.0.0.1"; // Using 127.0.0.1 avoids some socket resolution issues on Windows
$username = "root";
$password = "Alisherphpmyadmin12";
$database = "blog-php";
$port = 3306; // Adjust if your MySQL runs on a different port

$pdo = null;
$db_error = '';

try {
  $dsn = "mysql:host=$servername;port=$port;dbname=$database;charset=utf8mb4";
  $pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
  ]);
} catch (PDOException $e) {
  // Do not echo here; let callers decide how to present the error
  $db_error = "Connection failed: " . $e->getMessage();
}
