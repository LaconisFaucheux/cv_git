const voyelles = ['a', 'e', 'i', 'o', 'u','y'];
const consonnes = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];
const alphabet = voyelles.concat(consonnes)
let alphabet2 //servira pour créer un tableau de caractères à NE PAS inclure dans les réponses possibles
let tirage = [];

//valeurs qui partent vers le PHP
let draw = ''
let regexString = '';

let timerID = null;
let time = 30 ;

// changement du timer en fonction du choix de niveau
const easyButton = document.getElementById('45');
const mediumButton = document.getElementById('30');
const hardButton = document.getElementById('15');
mediumButton.setAttribute('class', 'btn btn-warning m-1 active')


function easyLevel () {
    easyButton.setAttribute('class', 'btn btn-success m-1 active')
    mediumButton.setAttribute('class', 'btn btn-warning m-1')
    hardButton.setAttribute('class', 'btn btn-danger m-1')
    time = 45;
    timer.innerText = '45';
}

function mediumLevel () {
    mediumButton.setAttribute('class', 'btn btn-warning m-1 active')
    easyButton.setAttribute('class', 'btn btn-success m-1')
    hardButton.setAttribute('class', 'btn btn-danger m-1')
    time = 30;
    timer.innerText = '30';
}

function hardLevel () {
    hardButton.setAttribute('class', 'btn btn-danger m-1 active')
    easyButton.setAttribute('class', 'btn btn-success m-1')
    mediumButton.setAttribute('class', 'btn btn-warning m-1')
    time = 15;
    timer.innerText = '15';
}

easyButton.addEventListener('click', easyLevel);
mediumButton.addEventListener('click', mediumLevel);
hardButton.addEventListener('click', hardLevel);
//Fin choix niveau

// Génération des lettres au clic et affichage dans les carrés + reload
const vowel = document.getElementById('vowel');
const consonant = document.getElementById('consonant');
const reload = document.getElementById('reload');

function reloadGame() {
    location.reload()
    input.value = ''
}

function giveVowel () {
    if (tirage.length < 10) {
        let i = Math.floor(Math.random() * (voyelles.length));
        tirage.push(voyelles[i]);
            if (tirage.length === 10) {
                buttonDisabler()
                timerID = setInterval(timerChrono, 1000)
                alphabetReduce()
            }
    }
    displayLetter();
}

function giveConsonant () {
    if (tirage.length < 10) {
        let i = Math.floor(Math.random() * (consonnes.length));
        tirage.push(consonnes[i]);
            if (tirage.length === 10) {
                buttonDisabler()
                timerID = setInterval(timerChrono, 1000)
                alphabetReduce()
            }
    }
    displayLetter()
}

function displayLetter () {
    for ( i=0; i<10; i++) {
        if (tirage[i] !== undefined) {
            let square = document.getElementById('square' + i);
            square.innerHTML=tirage[i].toUpperCase();
        }
    }
}

//Création et envoi de la regex et arrêt de l'écoute de l'input
function alphabetReduce () {
    alphabet2 = _.difference(alphabet, tirage)
    regexString = '/['+alphabet2.join('')+']/'
    draw = tirage.join('')
}

vowel.addEventListener('click', giveVowel);
consonant.addEventListener('click', giveConsonant);
reload.addEventListener('click', reloadGame);
//Fin génération tirage

//activation et désactivation des boutons
function buttonDisabler () {
    consonant.setAttribute('class', 'btn btn-primary m-1 disabled')
    vowel.setAttribute('class', 'btn btn-primary m-1 disabled')
    easyButton.setAttribute('class', 'btn btn-success m-1 disabled')
    mediumButton.setAttribute('class', 'btn btn-warning m-1 disabled')
    hardButton.setAttribute('class', 'btn btn-danger m-1 disabled')
}

function buttonEnabler () {
    consonant.setAttribute('class', 'btn btn-primary m-1')
    vowel.setAttribute('class', 'btn btn-primary m-1')
    easyButton.setAttribute('class', 'btn btn-success m-1')
    mediumButton.setAttribute('class', 'btn btn-warning m-1')
    hardButton.setAttribute('class', 'btn btn-danger m-1')
}
//fin activation désactivation boutons

// timer
const timer = document.getElementById('timer')

function timerChrono() {
    time--
    timer.innerText = time

    if (time === 0) {
        clearInterval(timerID)
        buttonEnabler()
        timerEnd()

    }
}
//Fin Timer

//Affichage des réponses et fin du temps

let input = document.getElementById('gameInput')
let answer

function timerEnd() {
    axiosRequest()
    answer = input.value;
    console.log(answer)
}

//AJAX avec Axios

const url = '/realisations/PHP/script.php';

function axiosRequest () {

    axios.post(url, ({
        regex: regexString,
        draw: draw
    }))
        .then(function (response) {
            let answers = response.data;
            document.getElementById('answerZone').removeAttribute('style')
            document.getElementById('answer1').innerHTML = answers[0].toUpperCase()
            document.getElementById('score1').innerHTML = answers[0].length + ' points'
            document.getElementById('answer2').innerHTML = answers[1].toUpperCase()
            document.getElementById('score2').innerHTML = answers[1].length + ' points'
            document.getElementById('answer3').innerHTML = answers[2].toUpperCase()
            document.getElementById('score3').innerHTML = answers[2].length + ' points'
            isValid = answers.indexOf(answer)
            console.log(answers)
            console.log(answer)
            console.log(isValid)
            if (isValid !== -1) {
                document.getElementById('userAnswer').innerHTML = answer.toUpperCase()
                document.getElementById('userScore').innerHTML = answer.length + ' points'
            } else {
                document.getElementById('userAnswer').innerHTML = "Réponse invalide!"
                document.getElementById('userScore').innerHTML = "0 points"
            }
        })
        .catch(function (error) {
            console.log(error);
        });
}



