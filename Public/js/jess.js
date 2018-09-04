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