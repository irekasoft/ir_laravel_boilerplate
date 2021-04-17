const btnHamburger = document.querySelector('#btnHamburger');
const body = document.querySelector('body');



const sidebar = document.querySelector('.sidebar');
const overlay = document.querySelector('#overlay');

const fadeElems = document.querySelectorAll('.can-fade');

btnHamburger.addEventListener('click', function(){

  console.log('click hamburger');

  if(sidebar.classList.contains('active')){
    // Close Hamburger Menu

    body.classList.remove('noscroll');

    sidebar.classList.remove('active');

    fadeElems.forEach(function(element){
      element.classList.remove('fade-in');
      element.classList.add('fade-out');
    });

    overlay.classList.add('hidden');
    overlay.classList.remove('visible');

  } else {
    // Open Hamburger Menu

    body.classList.add('noscroll');

    sidebar.classList.add('active');

    fadeElems.forEach(function(element){
      element.classList.remove('fade-out');
      element.classList.add('fade-in');
    });

    overlay.classList.remove('hidden');
    overlay.classList.add('visible');

  }

});
