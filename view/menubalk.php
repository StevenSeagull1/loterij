<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/homepage.css">
</head>
<body>
    
</body>
</html>
<img src="view/images/Ronrb.png">

<a href='?action=spel' target="blank"><div class="Spel">raad het getal</div></a>
<a href='?action=loterij' target="blank"><div class="Loterij">loterij</div></a>
<?php if (isset($_SESSION['username'])){
    echo '<a href="?action=logout"><div class="Spel">log uit</div></a>';
    }
    else{
        echo '<a href="?action=login" target="blank"><div class="login">registreer/login</div></a>';
    }
?>