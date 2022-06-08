<html>

<head>
    <meta charset="utf-8">
    <title>pauper spel</title>
    <script src="view/spel.js"defer></script>
    <link rel="stylesheet" href="view/spel.css">
</head>
  
<body>

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

<p>loten:</p><div id="punt"></div>
<?php

?>


<img src="view/images/ronnetje.png" id="ron">

<p>punten:</p><div id="punt"></div>

</body>
</html>