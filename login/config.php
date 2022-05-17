<?php
    $host = 'localhost';
    $db = 'login';
    $user = 'root';
    $password = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    try {
        $pdo = new PDO($dsn, $user, $password);
        return $pdo;
        if ($pdo) {
            echo "Connected to the $db succesfully!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>
