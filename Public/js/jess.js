$(document).ready(function () {
    $('.parallax').parallax();
});

$(function(){
    $('.scrollspy').scrollSpy();
})

$(function(){
    $('.carousel').carousel({
        duration: 500, //duracion de la animacion
        dist: -50,  //la distancia entre la prespectiva y la profundidad con las otras imagenes
        shift: 50,  //espacio del objeto del centro
        padding: 50, //paddin entre las imagenes
        fullWidth: false,  //que la imagen ocupa toda la pantalla
        indicators: true, //indicadores
        noWrap: false // indicar cuando el la ultima imagen
    });
});
$(document).on('click', '#mostrar', function () {
    Materialize.showStaggeredList('.lista');
});

 $(document).on('click', '#mostrarimagen', function () {
    Materialize.fadeInImage('.imagen');
});

$(document).on('click', '#mostrarimagen2', function () {
    Materialize.fadeInImage('.imagen2');
});

$(document).on('click', '#mostrarimagen3', function () {
    Materialize.fadeInImage('.imagen3');
});


$(document).ready(function(){
    $('.collapsible').collapsible();
  });
       


  $(document).ready(function(){
    $('input.autocomplete').autocomplete({
      data: {
        "thought": 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Thought_bubble.svg/220px-Thought_bubble.svg.png',
        "unfortunately": 'https://i.ytimg.com/vi/75eF1htaXhg/maxresdefault.jpg',
        "unconscious":"https://pbs.twimg.com/profile_images/436161151403954177/kXtpHqDI_400x400.jpeg",
        "curse words":"http://2.bp.blogspot.com/-CKAU5jMbFOA/VYQbKReagiI/AAAAAAAABUA/dhVnOe3BUPg/s1600/curse%2Bwords.jpg",
        "Google": 'https://placehold.it/250x250'
      },
    });
  });