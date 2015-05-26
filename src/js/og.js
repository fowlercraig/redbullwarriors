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
      totalFrames:      180,
      endFrame:         180,
      currentFrame:     1,
      framerate:        60,

      // progress:         '.spinner',
      // imagePath:        '/assets/img/png/',
      // filePrefix:       'Warriors_v02.',
      // ext:              '.png',

      // progress:         '.spinner',
      // imagePath:        '/assets/img/jpg-black/',
      // filePrefix:       'rb_can-',
      // ext:              '.jpg',

      // progress:         '.spinner',
      // imagePath:        '/assets/img/can/',
      // filePrefix:       'rb-warriors-',
      // ext:              '.gif',

      progress:         '.spinner',
      imagePath:        '/assets/img/png-8/',
      filePrefix:       'warriors-',
      ext:              '.png',

      height:           realHeight,
      width:            divWidth,
      navigation:       false,
      responsive:       true,
      onReady:          function(){ loadedCan() },
    });

  }

}

initCan();