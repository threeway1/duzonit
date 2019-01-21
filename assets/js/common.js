(function($){
    // gnb 관련
    $(document).on('mouseenter focus', '.gnb-list li', function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('body').addClass('opened');
    });
    $(document).on('mouseleave', '.gnb-list li', function(){
        $(this).removeClass('active');
    });
    $(document).on('mouseleave', '#gnb-nav .container', function(){
        $('body').removeClass('opened');
    });
    
    // quick-top 관련
    $(window).on('scroll', function(){
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });
    $(document).on('click', '.btn-top', function(e) {
        $('html, body').stop().animate({
            scrollTop: 0
        });
        e.preventDefault();
    });
    
    // banner 관련
    $(window).on('scroll', function() {
        if ($(this).scrollTop() >= 180) {
            $('#quick-banner').stop().animate({
                top: $(this).scrollTop() + 180
            }, 'slow');
        } else {
            $('#quick-banner').stop().animate({
                top: 180
            }, 'slow');
        }
    });
})(jQuery);