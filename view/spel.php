<html>

<head>
    <meta charset="utf-8">
    <title>pauper spel</title>
    <script src="view/spel.js"defer></script>
    <link rel="stylesheet" href="view/spel.css">
</head>
  
<body>
<a href='../index.php'>terug naar menu</a>

<h1>Raad het getal spel</h1>

<p>ik ron (akinator) boszhard heb een getal tussen de 1 en de 20 in mijn hoofd. Kan jij het raden?</p>

<div class="form">
    <label for="guessField">voer een getal in: </label><input type="text" id="guessField" class="guessField">
    <input type="submit" value="getal indienen" class="guessSubmit">
</div>

<div class="resultParas">
    <p class="guesses"></p>
    <p class="lastResult"></p>
    <p class="lowOrHi"></p>
</div>
<<<<<<< Updated upstream

<img src="images/ronnetje.png" id="ron" alt="foto van ron boszhard verwerkt in akinator lichaam">
=======
<<<<<<< HEAD
<img src="view/images/ronnetje.png" id="ron" alt="foto van ron boszhard verwerkt in akinator lichaam">
>>>>>>> Stashed changes
<p>loten:</p><div id="punt"></div>
<?php
foreach($_COOKIE as $key=>$value)
{
    echo "value: ".$value.'<br />';
};
?>
<<<<<<< Updated upstream

<img src="view/images/ronnetje.png" id="ron">
=======
=======
>>>>>>> Stashed changes
<p>punten:</p><div id="punt"></div>

</body>
</html>