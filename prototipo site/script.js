// Variável global para rastrear o índice do slide atual
var slideIndex = 1;

// Inicializa o slide show
showDivs(slideIndex);

// Função para avançar ou retroceder os slides
function plusDivs(n) {
  showDivs(slideIndex += n);
}

// Função para exibir o slide específico
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides"); // Obtém elementos com a classe "mySlides"

  // Verifica se o índice é maior que o número de slides, redefine para 1
  if (n > x.length) {
    slideIndex = 1;
  }

  // Verifica se o índice é menor que 1, redefine para o último slide
  if (n < 1) {
    slideIndex = x.length;
  }

  // Esconde todos os slides
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }

  // Exibe o slide atual
  x[slideIndex - 1].style.display = "block";
}
