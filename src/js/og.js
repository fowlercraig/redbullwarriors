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
      framerate:          15,

      progress:           '.spinner',
      imagePath:          '/assets/img/png-8/',
      filePrefix:         'warriors-',
      ext:                '.png',

      height:             realHeight,
      width:              divWidth,
      navigation:         false,
      responsive:         true,
      autoplayDirection:  -1,
      onReady:            function(){ can.play(),loadedCan() },
    });

  }

}

initCan();