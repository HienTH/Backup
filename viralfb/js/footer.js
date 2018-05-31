$(function () {
    var siteContentHeight = $('.site-content').height(),
        windowHeight =  $(window).height();
    if(siteContentHeight < windowHeight){
        $('.site-footer').css('position', 'absolute');
        $('.back-top').remove();
    }

    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
});