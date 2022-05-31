<?php

echo '<a href="?fun=inloggen">Login</a>'; 
echo '<a href="?fun=loterij">loterij</a>';
?>

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
<a href= "?fun=inloggen">inloggen<target="blank"><div class="login">registreer/login</div></a>
<a href='view/spel.html' target="blank"><div class="Spel">raad het getal</div></a>
<a href='shop/index.php' target="blank"><div class="Winkel">winkel</div></a>
<a href='lote/index.html' target="blank"><div class="Loterij">loterij</div></a>
<div class="punten">punten:</div>
<p>
    <a href="view/logout.php" class="btn btn-danger ml-3">log uit</a>
</p>
</body>
</html>