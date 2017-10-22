$(document).ready(function() {
  console.log('Is this working?');
  $(window).scroll(function() {
    var navMain = $('#main_nav');
    var headerSize = $('#main-header').height();
    var sticky = 'sticky';
    if ($(this).scrollTop() > headerSize) {
      navMain.addClass(sticky);
    } else {
      navMain.removeClass(sticky);
    }
  });
});
