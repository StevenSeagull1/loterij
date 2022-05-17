<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Registreer</title>
</head>
<body>
    <h2>Registreer</h2>
    <p> Registreer om een account aan te maken. </p>
    <form action="" method="post">
        <div class="username">
        <label for="username">Gebruikersnaam</label>
        <div>
        <input type="text" id="username" name="username" required>
        </div>
        </div>
        <div class="password">
        <label for="password">Wachtwoord</label>
        <div>
        <input type="password" id="password" name="password"  required>
        </div>
        </div>
        <div class="submit">
        <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>