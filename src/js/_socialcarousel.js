function socialCarousels(){

  var autoplayspeed   = 4000;
  var transitionspeed = 1000;

  $('#tw-carousel-1').slick({
    infinite        : true,
    slidesToShow    : 1,
    slidesToScroll  : 1,
    vertical        : true,
    //autoplay        : true,
    //autoplaySpeed   : autoplayspeed,
    speed           : transitionspeed,
    arrows          : false,
    //rtl             : true,
  });

  $('#tw-carousel-2').slick({
    infinite        : true,
    slidesToShow    : 1,
    slidesToScroll  : 1,
    vertical        : true,
    //autoplay        : true,
    //autoplaySpeed   : autoplayspeed,
    speed           : transitionspeed,
    arrows          : false
  });

  $('#social--slider .btn-left').click(function(){
    $('#tw-carousel-1').slick('slickPrev');
    $('#tw-carousel-2').slick('slickPrev');
  });

  $('#social--slider .btn-right').click(function(){
    $('#tw-carousel-1').slick('slickNext');
    $('#tw-carousel-2').slick('slickNext');
  });


}