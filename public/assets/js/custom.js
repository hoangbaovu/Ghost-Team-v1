jQuery(document).ready(function(){
  
  // Fly Ghost

  $('body').append('<img id="flyghost" class="visible-lg" title="The Ghost" src="/assets/img/ghost.gif" />')
  setInterval(function(){
     var $X=Math.ceil(Math.random()*$(window).width())
     var $Y=Math.ceil(Math.random()*$(window).height())
     $('img#flyghost').animate({'left':$X,'top':$Y},5000)
  },5000)
  $('img#flyghost').click(function(){
      window.open('/assets/img/ghost2.swf')
  });

  // $('html').append('<img id="flyghost2" class="hidden-sm" title="The Ghost" height="90" style="cursor:pointer;position:fixed;z-index:9999" src="/theghost/img/ghost.gif" />')
  //   setInterval(function(){
  //      var $X=Math.ceil(Math.random()*$(window).width())
  //      var $Y=Math.ceil(Math.random()*$(window).height())
  //      $('img#flyghost2').animate({'left':$X,'top':$Y},4000)
  //   },4000)
  //   $('img#flyghost2').click(function(){
  //       window.open('/theghost/img/ghost2.swf','')
  //   })

  // Back on Top

  // hide #back-top first
  $("#back-top").hide();
  
  // fade in #back-top
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
        $('#back-top').fadeIn();
      } else {
        $('#back-top').fadeOut();
      }
    });

    // scroll body to 0px on click
    $('#back-top a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });

}); // End