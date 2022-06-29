$(document).ready(function(){

    $("header .header-bottom .bar").on('click', function(){
        $(this).next().toggleClass('active');
        $(this).children().toggleClass('fa-bars fa-times');
        $('body').toggleClass('menu-active');
    });

    $("body.admin header .container .left svg").on('click', function(){
      $('.menu-lateral').toggleClass('active');
      $('body.admin').toggleClass('menu-active');
    });
    $("body.admin .menu-lateral .close").on('click', function(){
      $('.menu-lateral').toggleClass('active');
      $('body.admin').toggleClass('menu-active');
    });

    $('.marcas .galeria').slick({
      infinite: true,
      prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
      nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>',
      slidesToShow: 5,
      autoplay: true,
      autoplaySpeed: 1500,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          },
          breakpoint: 420,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
    ]
  });

    $('.clientes .carrossel').slick({
      infinite: true,
      prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
      nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>',
      autoplay: true,
      autoplaySpeed: 3000
  });

    $('.banners .itens').slick({
        infinite: true,
        prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        autoplay: true,
        autoplaySpeed: 5000
    });

    $('.servicos.slider .itens').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });
    $('.noticias .itens').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
      ]
    });
    $('.galeria-fotos .itens').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
      ]
    });
    $( '.swipebox' ).swipebox();
    $( '.swipebox-video' ).swipebox();
});