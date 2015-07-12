jQuery(document).ready(function(){$('body').append('<img id="flyghost" class="visible-lg" title="The Ghost" src="/assets/img/ghost.gif" />')
setInterval(function(){var $X=Math.ceil(Math.random()*$(window).width())
var $Y=Math.ceil(Math.random()*$(window).height())
$('img#flyghost').animate({'left':$X,'top':$Y},5000)},5000)
$('img#flyghost').click(function(){window.open('/assets/img/ghost2.swf')});$("#back-top").hide();$(window).scroll(function(){if($(this).scrollTop()>200){$('#back-top').fadeIn();}else{$('#back-top').fadeOut();}});$('#back-top a').click(function(){$('body,html').animate({scrollTop:0},800);return false;});});