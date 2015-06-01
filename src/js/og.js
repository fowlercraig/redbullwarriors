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

 //   function moveCan(){

//     var timeFrame = 150000;

//     function initialTour(){

//       var timeFrame = 150000;

//       setTimeout(function(){
//         can.gotoAndPlay(160);
//       },5000);

//       setTimeout(function(){
//         can.gotoAndPlay(15);
//       },10000);

//       setTimeout(function(){
//         can.gotoAndPlay(180);
//       },150000);

//     }

//     initialTour();

//     setTimeout(function(){

//       can.play();

//     },20000);

//   }
    $(".gps_ring").hide();

    function initspin(){
      // can.play();
      can.gotoAndPlay(0);

      setTimeout(function(){

        var d= 0;
          $('.gps_ring.middle').each(function() {
          $(this).delay(d).fadeIn(500);
          d += 300;
        });

      },1000);

    }

    function hoverCan(){

    $(".gps_ring").hide();

    $(".can").hover(function(){

      var currentframe = can.getNormalizedCurrentFrame();
      console.log(currentframe);

      // Middle

      if ( currentframe > 0 ) {
        if ( currentframe < 25) {
          can.gotoAndPlay(0);
          can.stop();
          $(".gps_ring.middle").fadeIn();
          console.log('1');
        }
      }

      // Left Side

      if ( currentframe > 24 ) {
        if ( currentframe < 45) {
          can.gotoAndPlay(25);
          can.stop();
          console.log('Left Side');
        }
      }

      // Broad Left Side

      if ( currentframe > 45 ) {
        if ( currentframe < 90) {
          can.gotoAndPlay(25);
          can.stop();
          console.log('Left Side');
        }
      }

      // Right Side

      if ( currentframe > 155 ) {
        if ( currentframe < 180) {
          can.gotoAndPlay(155);
          can.stop();
          console.log('3');
        }
      }

      // Broad Right Side

      if ( currentframe > 90 ) {
        if ( currentframe < 155) {
          can.gotoAndPlay(155);
          can.stop();
          console.log('Left Side');
        }
      }

    }, function(){

      can.play();

    });

    }

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