
function($) {

var _scrollTop = function () {
    $(document).ready(function(){
        // if window is not on top, display button
        $(window).scroll(function(){
            if ($(this).scrollTop() > 10) {
                 $('.scroll-top').fadeIn();
            }
            else {
                 $('.scroll-top').fadeOut("fast");
            }
        });

        // scroll to top
        $('.scroll-top').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });

    });
}(jquery)
