<html>

<head>
    <meta charset="utf-8">
    <title>pauper spel</title>
    <script>
        let points = 0;
let audio = new Audio("kansloos.mp3");
let audio2 = new Audio(src="buma-dus-chapeau.mp3");
let randomNumber = Math.floor(Math.random() * 4) + 1;
const guesses = document.querySelector('.guesses');
const lastResult = document.querySelector('.lastResult');
const lowOrHi = document.querySelector('.lowOrHi');
const guessSubmit = document.querySelector('.guessSubmit');
const guessField = document.querySelector('.guessField');
let guessCount = 1;
let resetButton;
let image = document.getElementById('ron');
function checkGuess() {
    const userGuess = Number(guessField.value);
    if (guessCount === 1) {
        guesses.textContent = 'Previous guesses: ';
    }

    guesses.textContent += userGuess + ' ';
    if (userGuess === randomNumber) {
        lastResult.textContent = 'Geweldig! ik ben trots op je.';
        lastResult.style.backgroundColor = 'green';
        lowOrHi.textContent = '';
        points+=1
        audio2.play();
        console.log(points)
        document.getElementById("punt").innerHTML = points;
        image.src = "view/images/ronblij.png";
        setGameOver();
    } else if (guessCount === 10) {
        lastResult.textContent = 'wat ben jij waardeloos';
        lowOrHi.textContent = '';
        image.src = "view/images/ronnetje.png";
        setGameOver();
    } else {
        lastResult.textContent = 'Kansloos!';
        image.src = "view/images/ronnetje.png";
        audio.play();
        lastResult.style.backgroundColor = 'red';
    }

    guessCount++;
    guessField.value = '';
    guessField.focus();
}

guessSubmit.addEventListener('click', checkGuess);

function setGameOver() {
    guessField.disabled = true;
    guessSubmit.disabled = true;
    resetButton = document.createElement('button');
    resetButton.textContent = 'Start new game';
    document.body.appendChild(resetButton);
    resetButton.addEventListener('click', resetGame);
}

function resetGame() {
    guessCount = 1;
    const resetParas = document.querySelectorAll('.resultParas p');
    for (const resetPara of resetParas) {
        resetPara.textContent = '';
        image.src = "view/images/ronnetje.png";
    }

    resetButton.parentNode.removeChild(resetButton);
    guessField.disabled = false;
    guessSubmit.disabled = false;
    guessField.value = '';
    guessField.focus();
    lastResult.style.backgroundColor = 'white';
    randomNumber = Math.floor(Math.random() * 4) + 1;
}
function maakkoekje() {
    document.cookie = points
}
    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="spel.css">
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
<img src="view/images/ronnetje.png" id="ron" alt="foto van ron boszhard verwerkt in akinator lichaam">
<p>punten:</p><div id="punt"></div>
</body>
</html>