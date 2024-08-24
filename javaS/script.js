/**Banner */
$(document).ready(function () {
  $('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,

  });
})

 //AREA LOGin
//CRIAÇÃO DA FUNÇÃO CARREGAR LOGIN QUE IRA SUBIR UMA MESNAGM AO CLICKAR NOO BOTÃO

function carregarLogin() {
  alert('Login bem- sucedido! Redirecionando...');
}


