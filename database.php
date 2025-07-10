<?php
// Function to establish a database connection
function connectToDatabase()
{
    $host = 'localhost';
    $db_name = 'vnect';
    $db_username = 'root';
    $db_password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db_name", $db_username, $db_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
?>
