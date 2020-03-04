"use strict";

console.log("main.js");

$(function() {
  //Carousel

  $(".cards").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false
        }
      }
    ]
  });

  //Formulário

  $(".telefone").mask("(00)00000-0000");
  $(".cep").mask("00000-000");

  $(".custom-form").on("submit", function(e) {
    e.preventDefault();
    Swal.fire(
      "Cadastro Realizado com sucesso!",
      "Em breve você recebera um email com seu prêmio da loteria :D",
      "success"
    );
  });
});
