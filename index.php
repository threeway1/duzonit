<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link rel="stylesheet" href="/comm/css/main.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    
    <div id="visual" class="jumbotron">
        <ul>
            <li class="first">
                <div class="container">
                    <div class="slide-content">
                        <div class="slogan">
                            <small>비즈니스의 혁신</small>
                            <h3>
                                <b class="blue">완전한 스마트워크센터 구축</b>을 위한<br>
                                <b>제품도입</b>을 <b>고려해보세요</b>
                            </h3>
                            <figure>
                                <img src="/comm/images/main/img_slider01.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second">
                <div class="container">
                    <div class="slide-content">
                        <div class="slogan">
                            <small>비즈니스의 혁신</small>
                            <h3>
                                <b class="blue">완전한 스마트워크센터 구축</b>을 위한<br>
                                <b>제품도입</b>을 <b>고려해보세요</b>
                            </h3>
                            <figure>
                                <img src="/comm/images/main/img_slider01.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </li>
            <li class="third">
                <div class="container">
                    <div class="slide-content">
                        <div class="slogan">
                            <small>비즈니스의 혁신</small>
                            <h3>
                                <b class="blue">완전한 스마트워크센터 구축</b>을 위한<br>
                                <b>제품도입</b>을 <b>고려해보세요</b>
                            </h3>
                            <figure>
                                <img src="/comm/images/main/img_slider01.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    <!-- Content -->
    <main id="content">
        <section class="product">
            <div class="container">
                <div class="section-header">
                    <h4 class="white">제품/서비스</h4>
                </div>
                <div class="section-content">
                    <ul>
                        <li>
                            <a href="#">
                                <figure>
                                    <img src="" alt="">
                                    <figcaption></figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="business">
            <div class="container">
                <div class="section-header">
                    <h4>스마트공장<br>지원사업</h4>
                </div>
                <div class="section-content">
                    
                </div>
            </div>
        </section>
        <section class="counseling">
            <div class="container">
                <div class="section-header">
                    <h4>상담 및 문의</h4>
                </div>
                <div class="section-content">
                    
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
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
    </script>
</body>
</html>