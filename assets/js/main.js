(function($){
    // jomboslide
    $(document).ready(function(){
        $('.jumbotron > ul').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            dots: false,
            prevArrow: '<button type="button" class="btn btn-prev"><i class="icon-left-open"><span class="sr-only">이전슬라이이드</span></i></button>',
            nextArrow: '<button type="button" class="btn btn-next"><i class="icon-right-open"><span class="sr-only">다음슬라이이드</span></i></button>'
        });
    });
})(jQuery);