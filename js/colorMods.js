let feuilleCSS = document.getElementById('css')
let navBar = document.querySelector('nav')
let green = document.querySelector('#green')
let yellow = document.querySelector('#yellow')
let blue = document.querySelector('#blue')
let style = document.querySelector('#styles')
let darkMode = document.querySelector('#darkMode')

function changeCSSToGreen (){
    let attributElement = green.getAttribute('id')
    feuilleCSS.setAttribute('href', `css/${attributElement}.css`)
    navBar.setAttribute('class', 'navbar navbar-expand-lg navbar-dark bg-primary fixed-top')
}

function changeCSSToYellow (){
    let attributElement = yellow.getAttribute('id')
    feuilleCSS.setAttribute('href', `css/${attributElement}.css`)
    navBar.setAttribute('class', 'navbar navbar-expand-lg navbar-light bg-primary fixed-top')
        
}

function changeCSSToBlue (){
    let attributElement = blue.getAttribute('id')
    feuilleCSS.setAttribute('href', `css/${attributElement}.css`)
    navBar.setAttribute('class', 'navbar navbar-expand-lg navbar-dark bg-primary fixed-top')
}

function changeCSSToStyle (){
    let attributElement = style.getAttribute('id')
    feuilleCSS.setAttribute('href', `css/${attributElement}.css`)
    navBar.setAttribute('class', 'navbar navbar-expand-lg navbar-dark bg-primary fixed-top')
}

function changeCSSToDarkMode (){
    let attributElement = darkMode.getAttribute('id')
    feuilleCSS.setAttribute('href', `css/${attributElement}.css`)
    navBar.setAttribute('class', 'navbar navbar-expand-lg navbar-dark bg-primary fixed-top')
}

green.addEventListener('click', changeCSSToGreen)
yellow.addEventListener('click', changeCSSToYellow)
blue.addEventListener('click', changeCSSToBlue)
style.addEventListener('click', changeCSSToStyle)
darkMode.addEventListener('click', changeCSSToDarkMode)
 

