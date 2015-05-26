$(document).ready(function(){

  $(".tab").tabs();

  $('.tab').click(function(){

    if ( $('.inner').parent().hasClass('fs-tabs-active')) {

      $('.inner').removeClass('hello');

      setTimeout(function(){
        $('.fs-tabs-active .inner').addClass('hello');
      },100);

    } else {

    }

  });

  window.onload = init;
  blurred = false;
  window.onfocus = function(event) {
    advanceCan();
    blurred = false;
  }

  window.onblur = function(event) {
    blurred = true;
  }

  var product;
  function init(){
  // Hack to hide all hotspot links for now
  $(".hotspot-frame a").hide();

  var canHeight  = 675;
  var canWidth   = 250;
  var divWidth   = $('#spinner--wrapper').width();
  var scaled     = divWidth/canWidth;
  var realHeight = canHeight*scaled;

  product1 = $('.can').ThreeSixty({
    totalFrames: 180, // Total no. of image you have for 360 slider
    endFrame: 180, // end frame for the auto spin animation
    currentFrame: 1, // This the start frame for auto spin
    framerate: 60,
    imgList: '.threesixty_images', // selector for image list
    progress: '.spinner', // selector to show the loading progress
    imagePath:'/assets/img/can/', // path of the image assets
    filePrefix: 'rb_can-', // file prefix if any
    ext: '.gif', // extention for the assets
    height: realHeight,
    width: divWidth,
    autoplayDirection: 1,
    navigation: false,
    responsive: true,
    disableSpin: false, // Default false
    onReady: function(){
      advanceCan();
    },
  });

  }

  nextSlide = 30;
  function advanceCan() {
    $(".hotspot-frame a").hide();
    product1.gotoAndPlay(nextSlide);
    $tabSelector="";
    switch(nextSlide) {
      case 0:
        nextSlide=30;
        break;
      case 45:
        nextSlide=90;
        $tabSelector = $("a[href='#tab-07']");
        break;
      case 90:
        nextSlide=135;
        $tabSelector = $("a[href='#tab-08']");
        break;
      case 135:
        nextSlide=180;
        $tabSelector = $("a[href='#tab-09']");
        break;
    }

    setTimeout(function() {
      $tabSelector.click();

      $("a[href=#tab-01]").show(1000, function() {
        $("a[href=#tab-02]").show(1000, function() {
           $("a[href=#tab-03]").show(1000, function() {
            if(blurred == false) {
              setTimeout(function() {
                advanceCan();
              }, 3000);
            }

          });
        });
      });



    }, 2000);



  }

});
