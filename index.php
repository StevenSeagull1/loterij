<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <script src="js.js"></script>
    <title>Loterij</title>
</head>
<body>
<img src="Ronrb.png">
<a href='login/inlogForm.php' target="blank"><div class="login">registreer/login</a></div>
<a href='spel/index.html' target="blank"><div class="Spel">raad het getal</a></div>
<a href='shop/index.php' target="blank"><div class="Winkel">winkel</a></div>
<a href='lote/index.html' target="blank"><div class="Loterij">loterij</a></div>
<div class="punten">punten:</div>

<p>
    <a href="login/logout.php" class="btn btn-danger ml-3">log uit</a>
</p>
echo "php";

</body>
</html>
=======
<?php
session_start();

require 'login/crudUser.php';
if(!isset($_SESSION['rechten'])){
    inlogAction();
}
else{
    $function = filter_input(INPUT_GET, 'fun');

    switch($function){
        case 1: inlogAction();
        break;
        default:
    }
}
>>>>>>> Stashed changes
