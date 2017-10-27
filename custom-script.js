$(document).ready(function() {
  console.log('Is this working?');
  $(window).scroll(function() {
    var navMain = $('#main_nav');
    var headerSize = $('#main-header').height();
    var sticky = 'sticky';
    if ($(this).scrollTop() > headerSize && $(window).width() > 768) {
      navMain.addClass(sticky);
    } else {
      navMain.removeClass(sticky);
    }
  });
  $('#nav-button').click(function() {
    $('#main_nav').toggle();
  });
  $(window).resize(function() {
    var main_nav = $('#main_nav');
    var winwidth = $(window).width();
    if (winwidth > 768 && (main_nav.css('display') == 'none' || main_nav.css('display') == 'block')) {
      main_nav.css('display', '');
    }
  });
});
