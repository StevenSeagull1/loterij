<?php
host = '127.0.0.1';
$db = 'loterij';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
//dsn gezet
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//pdo maken
$pdo = new PDO($dsn, $user, $pass);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
# PRDO QUERY
$stmt = $pdo->query('SELECT * FROM loterij');
$logboek = $stmt->fetchAll(PDO::FETCH_ASSOC)
?>
