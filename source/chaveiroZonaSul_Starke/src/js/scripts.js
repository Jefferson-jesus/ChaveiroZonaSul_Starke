$(document).ready(function() {
    var scrolling = false;
    $(window).scroll(function() {
        if (($(window).scrollTop()) >= 40) {
          if (!scrolling){
            $('header').addClass("op");
            scrolling = true;
            
          }
        } else {
            $('header').removeClass("op");
        scrolling=false;
        }
    });
});
