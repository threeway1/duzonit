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
})(jQuery);