let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function moveSlide(direction) {
    // Actualizamos el índice de la diapositiva en función de la dirección
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;

    // Cambiamos la propiedad transform para mover el carrusel a la diapositiva correcta
    document.querySelector('.slides').style.transform = `translateX(-${currentSlide * 100}%)`;
}

// Manejo de desplazamiento del logo
window.onscroll = function() {
    let logo = document.getElementById("logo");
    if (window.scrollY > 50) {
        logo.style.top = "0";
    } else {
        logo.style.top = "10px";
    }
};

// Botón de "prev" y "next" para controlar el slider
document.querySelector('.prev').addEventListener('click', function() {
    moveSlide(-1); // Mueve el slider hacia atrás
});

document.querySelector('.next').addEventListener('click', function() {
    moveSlide(1); // Mueve el slider hacia adelante
});
