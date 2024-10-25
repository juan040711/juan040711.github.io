function changeImage(source, thumbnail) {
  document.querySelector('.left-column img').src = source;
  const thumbnails = document.querySelectorAll('.left-column .thumbnails img');
  thumbnails.forEach(thumb => {
    thumb.classList.remove('selected');
  });
  thumbnail.classList.add('selected');
}

function highlightPrice() {
  const priceElement = document.getElementById('price');
  priceElement.style.fontSize = '36px'; // Aumentar tamaño
  priceElement.style.color = 'red'; // Cambiar color
}

function toggleDescription() {
  const descriptionElement = document.getElementById('description');
  if (descriptionElement.style.display === 'none') {
    descriptionElement.style.display = 'block'; // Mostrar descripción
  } else {
    descriptionElement.style.display = 'none'; // Ocultar descripción
  }
}
