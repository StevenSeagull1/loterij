<?php


$host = 'localhost'; //Hostnaam
$db = 'loterij'; //database naam
$user = 'root';     //login user naam
$pass = '';    //login wachtwoord
$charset = 'utf8mb4';   //character set, voor deze opdracht utf8mb4

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";  // DSN connectie

$options = [                                         // Options voor o.a. error handeling en fetchmode
     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
     PDO::ATTR_EMULATE_PREPARES => false,
 ];

try {                                               // Een try/catch waarin je een nieuwe PDO instance aanmaakt, en errorhandeling afwerkt.
    $pdo = new PDO($dsn, $user, $pass, $options);
    
}

 catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
     
 } 

 $username = $_POST['username'];
 $password = $_POST['password'];
 $mysql = "INSERT INTO user (username, password) values(:username, :password)";
 $statement = $pdo -> prepare($mysql);
 $statement -> execute([':username'=>$username, ':password'=>$password]);

?>