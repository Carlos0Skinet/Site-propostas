// Menu mobile
let btnMenu = document.getElementById('btn-menu');
let menu = document.getElementById('menu-mobile');
let overlay = document.getElementById('overlay-menu');

btnMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
});

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
});

overlay.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
});
// Fim menu mobile

// Scroll reveal
window.sr = ScrollReveal({ reset: true});

// topo do site
sr.reveal('#txt-topo', { 
    duration: 1500,
    distance: '90px',
    origin: 'left'
});

sr.reveal('.img-topo-site img', { 
    duration: 1500,
    distance: '25px',
    delay: 500,
    origin: 'right'
});
// fim topo do site

// sobre
sr.reveal('.sobre .txt-sobre', { 
    duration: 1000,
    origin: 'bottom',
    distance: '10px',
    delay: 200
});
//fim sobre

// objetivo
sr.reveal('#txt-topo-b', { 
    duration: 1500,
    distance: '25px',
    origin: 'right'
});

sr.reveal('#img-objetivos img', { 
    duration: 1500,
    distance: '90px',
    delay: 400,
    origin: 'left'
});
// Fim objetivo
// Gerais
sr.reveal('.titulo', { 
    duration: 800,
    distance: '40px'
});

// Fim gerais
// Fim scroll reveal
