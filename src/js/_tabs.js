function tabInit(){

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

}

tabInit();