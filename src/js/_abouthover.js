function aboutHover(){

  var speed = 200;

  $("#home--view-gallery").hover(
    function() {
      $("#home--about_bg").stop(true, true).transition({
        opacity : 1,
        zIndex: 3,
      },speed,'ease');
      $("#home--about_title").stop(true, true).transition({
        opacity : 0,
      },speed,'ease');
      $("#home--about_info .section-content").stop(true, true).transition({
        opacity : .25,
        paddingTop: '10px',
      },speed,'ease',function(){
        $(this).transition({
          zIndex: 2,
        },speed);
      },speed,'ease');
    },
    function() {
      $("#home--about_bg").stop(true, true).transition({
        opacity : .5,
        zIndex: 1,
      },speed,'ease');
      $("#home--about_title").stop(true, true).transition({
        opacity : 1,
      },speed,'ease');
      $("#home--about_info .section-content").stop(true, true).transition({
        opacity : 1,
        paddingTop: '0',
      },speed,'ease');
    }
  );

}