document.addEventListener('DOMContentLoaded', (event) => {
  // Obtén el modal
  var modal = document.getElementById('termsModal');

  // Obtén el enlace que abre el modal
  var link = document.getElementById('termsLink');

  // Obtén el elemento que cierra el modal
  var span = document.getElementsByClassName('close-button')[0];

  // Obtén el botón que acepta los términos y condiciones
  var acceptButton = document.getElementById('acceptTermsButton');

  // Cuando el usuario hace clic en el enlace, abre el modal
  link.onclick = function(event) {
    event.preventDefault();
    modal.style.display = 'block';
  }

  // Cuando el usuario hace clic en el botón de cerrar (x), cierra el modal y redirige a index.php
  span.onclick = function() {
    modal.style.display = 'none';
    window.location.href = 'index.php'; // Redirige a index.php
  }

  // Cuando el usuario hace clic en el botón de aceptar, cierra el modal y redirige a index.php
acceptButton.onclick = function() {
  console.log("El botón fue presionado");
  modal.style.display = 'none';
  window.location.href = 'index.php'; // Redirige a index.php
}


  // Cuando el usuario hace clic en cualquier lugar fuera del modal, cierra el modal y redirige a index.php
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = 'none';
      window.location.href = 'index.php'; // Redirige a index.php
    }
  }
});



