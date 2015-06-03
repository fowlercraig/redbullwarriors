$(window).resize(function(){


  if ($(window).width() < 500){

    $('.hotspot-frame').hide();

  } else if ($(window).width() < 740) {

    $('.hotspot-frame').show();
    var percentage = 0.647;
    adjustHostpots();

  } else if ($(window).width() < 980) {

    var percentage = 0.985;
    adjustHostpots();

  } else if ($(window).width() < 1220) {

    var percentage = 0.8;
    adjustHostpots();

  }



  function adjustHostpots(){

    $('.gps_ring').each(function() {

      var left = $(this).data('left');
      var top = $(this).data('top');

      $(this).css({
        left: left*percentage,
        top:  top*percentage,
      })

    });

  }



}).resize();
