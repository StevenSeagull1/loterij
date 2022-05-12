<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login/reg.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <script src="js.js"></script>
    <title>Loterij</title>
</head>
<body>
<a href='login/reg.php' target="blank"><div class="login">registreer/login</div></a>
<a href='spel/index.html' target="blank"><div class="Spel">raad het getal</div></a>
<a href='shop/index.php' target="blank"><div class="Winkel">winkel</div></a>
<a href='lote/index.html' target="blank"><div class="Loterij">loterij</div></a>
<div class="punten">punten:</div>
    <p>
        <a href="login/logout.php" class="btn btn-danger ml-3">log uit</a>
    </p>
</body>
</html>