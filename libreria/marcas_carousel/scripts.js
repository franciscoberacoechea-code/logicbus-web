$(document).ready(function () {
  $('.single-item').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1
  });
  $('.multiple-items').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3
  });
  $('.one-time').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    touchMove: false,
    slidesToScroll: 1
  });
  $('.uneven').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4
  });
  $('.responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.variable-width').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    centerMode: true,
    variableWidth: true
  });

  $('.autoplay').slick({
    dots: true,
    infinite: true,
    speed: 300,
    centerMode: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
    autoplaySpeed: 2000,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {

          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {

          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          autoplay: true,
          centerPadding: '40px',
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.autoplay_2').slick({
    dots: true,
    infinite: true,
    speed: 300,
    centerMode: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    arrows: true,
    autoplaySpeed: 2000,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {

          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {

          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          autoplay: true,
          centerPadding: '40px',
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });



});