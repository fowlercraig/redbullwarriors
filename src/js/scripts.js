// @codekit-prepend "og.js"
// @codekit-prepend "_abouthover.js"
// @codekit-prepend "_smoothscroll.js"

function randomInit(){

  $("#home--about_wrapper, .video-wrapper").equalize({
    target: ".sized"
  });

  $(".video-wrapper").fitVids();

}

function canOverlay(){

  $('body').css('overflow', 'hidden');
  $("#spinner--overlay").transition({opacity:1,}).addClass('active');
  $("#spinner--wrapper").css({zIndex:100,position:'relative'}).addClass('active');

}

function canOverlay_close(){

  $('body').css('overflow', 'visible');
  $("#spinner--overlay").transition({opacity:0}).removeClass('active');
  $("#spinner--wrapper").css({zIndex:100,position:'relative'}).addClass('active');
  $("#spinner--container .tab").removeClass('fs-tabs-active');

}

function headerjunk(){

  var options = {
    offset: 100,
    classes: {
      clone:   'banner--clone',
      stick:   'banner--stick',
      unstick: 'banner--unstick'
    },
    onInit: function() {
      smoothScroll();
    },
  };
  var banner = new Headhesive('#home--can_nav', options);

}


$(document).ready(function(){

  randomInit();
  headerjunk();
  aboutHover();

  $(".gps_ring").click(function(){
    canOverlay();
    $(".gps_ring").removeClass('active');
    $(this).addClass('active');
  });

  $("#spinner--overlay_close").click(function(){
    canOverlay_close();
  });

});