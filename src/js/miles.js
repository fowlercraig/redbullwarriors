$(document).ready(function(){

// $(".tab").tabs();

// $('.tab').click(function(){

//   if ( $('.inner').parent().hasClass('fs-tabs-active')) {

//     $('.inner').removeClass('hello');

//     setTimeout(function(){
//       $('.fs-tabs-active .inner').addClass('hello');
//     },100);

//   } else {

//   }

// });

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
  //$(".hotspot-frame a").hide();

  product1 = $('.can').ThreeSixty({
    totalFrames:      180,
    endFrame:         180,
    currentFrame:     1,
    framerate:        60,
    imgList: '.threesixty_images', // selector for image list

    // progress: '.spinner', // selector to show the loading progress
    // imagePath:'assets/img/spinner/', // path of the image assets
    // filePrefix: 'lata-', // file prefix if any
    // ext: '.gif', // extention for the assets

    progress:         '.spinner',
    imagePath:        '/assets/img/png-8/',
    filePrefix:       'warriors-',
    ext:              '.png',

    height: 675,
    width: 500,
    autoplayDirection: 1,
    navigation: false,
    responsive: true,
    disableSpin: false, // Default false
    onReady: function(){
      advanceCan();
    },
  });

  }

  nextSlide = 60;
  function advanceCan() {
    //$(".hotspot-frame a").hide();
    product1.gotoAndPlay(nextSlide);
    $tabSelector="";
    switch(nextSlide) {
      case 0:
        nextSlide=30;
        break;
      case 30:
        nextSlide=120;
        $tabSelector = $("a[href='#tab-07']");
        break;
      case 60:
        nextSlide=180;
        $tabSelector = $("a[href='#tab-08']");
        break;
      case 90:
        nextSlide=60;
        $tabSelector = $("a[href='#tab-09']");
        break;
    }

    setTimeout(function() {
      $tabSelector.click();

      $("a[href=#tab-1]").show(1000, function() {
        $("a[href=#tab-2]").show(1000, function() {
           $("a[href=#tab-3]").show(1000, function() {
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
