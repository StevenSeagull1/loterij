let points = 0;
<<<<<<< Updated upstream
let audio = new Audio("kansloos.mp3");
let audio2 = new Audio(src="buma-dus-chapeau.mp3");
let randomNumber = Math.floor(Math.random() * 4) + 1;
=======
let randomNumber = Math.floor(Math.random() * 20) + 1;
>>>>>>> Stashed changes
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
        image.src = "ronblij.png";
        setGameOver();
    } else if (guessCount === 10) {
        lastResult.textContent = 'wat ben jij waardeloos';
        lowOrHi.textContent = '';
        image.src = "ronnetje.png";
        setGameOver();
    } else {
        lastResult.textContent = 'Kansloos!';
        image.src = "ronnetje.png";
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
        image.src = "ronnetje.png";
    }

    resetButton.parentNode.removeChild(resetButton);
    guessField.disabled = false;
    guessSubmit.disabled = false;
    guessField.value = '';
    guessField.focus();
    lastResult.style.backgroundColor = 'white';
    randomNumber = Math.floor(Math.random() * 20) + 1;
}

