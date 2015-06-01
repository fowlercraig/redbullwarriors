function initCan(){

  window.onload = init;
  var can;

  function init(){

    var canHeight  = 675;
    var canWidth   = 250;
    var divWidth   = $('#spinner--wrapper').width();
    var scaled     = divWidth/canWidth;
    var realHeight = canHeight*scaled;

    function loadedCan(){
      $('.loader-img').fadeOut();
      $('#spinner-tabs').fadeIn();
    }

    $('.can').css({
      height: realHeight,
      width:  divWidth
    });

    can = $('.can').ThreeSixty({
      totalFrames:        180,
      endFrame:           180,
      currentFrame:       1,
      framerate:          100,
      playSpeed:          60,

      progress:           '.spinner',
      imagePath:          '/assets/img/png-8/',
      filePrefix:         'warriors-',
      ext:                '.png',

      height:             realHeight,
      width:              divWidth,
      navigation:         false,
      responsive:         true,
      autoplayDirection:  -1,
      onReady:            function(){ initspin(), loadedCan() },
    });

    $(".gps_ring").hide();

    function initspin(){

      setTimeout(function(){

        can.gotoAndPlay(25);
        $('.gps_ring.left').fadeIn();

      },1000);

    }

    function hoverCan(){

    $(".gps_ring").hide();



    $("#spinner--container").hover(function(){

      var currentframe = can.getNormalizedCurrentFrame();
      console.log(currentframe);

      // Middle

      if ( currentframe > 0 ) {
        if ( currentframe < 25) {
          can.gotoAndPlay(0);
          can.stop();
          $('.gps_ring.middle').fadeIn();
        }
      }

      // Left Side

      if ( currentframe > 24 ) {
        if ( currentframe < 45) {
          can.gotoAndPlay(25);
          can.stop();
          console.log('Left Side');
          $('.gps_ring.left').fadeIn();
        }
      }

      // Broad Left Side

      if ( currentframe > 45 ) {
        if ( currentframe < 90) {
          can.gotoAndPlay(25);
          can.stop();
          console.log('Left Side');
          $('.gps_ring.left').fadeIn();
        }
      }

      // Right Side

      if ( currentframe > 155 ) {
        if ( currentframe < 180) {
          can.gotoAndPlay(155);
          can.stop();
          console.log('3');
          $('.gps_ring.right').fadeIn();
        }
      }

      // Broad Right Side

      if ( currentframe > 90 ) {
        if ( currentframe < 155) {
          can.gotoAndPlay(155);
          can.stop();
          console.log('Left Side');
          $('.gps_ring.right').fadeIn();
        }
      }

    }, function(){

      if ($('#spinner--overlay').hasClass('active')){
        can.stop();
      } else {
        can.play();
        $(".gps_ring").hide();
      }

    });

    }

    function move() {

      can.$el.bind('mousedown touchstart touchmove touchend mousemove click', function (event) {

        event.preventDefault();

        if ((event.type === 'mousedown' && event.which === 1) || event.type === 'touchstart') {
          $(".gps_ring").hide();
          $('body').css('overflow', 'visible');
          $("#spinner--overlay").transition({opacity:0}).removeClass('active');
          $("#spinner--wrapper").css({zIndex:100,position:'relative'}).addClass('active');
          $("#spinner--container .tab").removeClass('fs-tabs-active');
        }

      });

    }

    move();

    //console.log(touchevent);

    $('#spinner--overlay_close').on('click', function(){
      can.play();
      $(".gps_ring").fadeOut();
    });

    // hoverCan();

    function advanceCan(){

      can.gotoAndPlay(nextSlide);
      $tabSelector="";
      switch(nextSlide) {

        case 0:
          nextSlide=30;
          break;
        case 30:
          nextSlide=120;
      }

    }

  }

}

initCan();