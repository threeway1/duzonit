<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link rel="stylesheet" href="/comm/css/sub.css">
<link rel="stylesheet" href="/comm/css/product.css">
</head>
<body>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <h3><span>제품</span>서비스</h3>
            <hr>
            <p>대한민국 기업에 최적화된 다양한 제품을 소개합니다.</p>
        </div>
    </div>
    <div class="page-path">
        <div class="container">
            <ol>
                <li class="home">
                    <a href="#">
                        <i class="icon-home">
                            <span class="sr-only">메인으로 이동</span>
                        </i>
                    </a>
                </li>
                <li>
                    <div class="dropdown snb">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="snbMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            제품서비스
                        </a>
                        <div class="dropdown-menu" aria-labelledby="snbMenu">
                            <a class="dropdown-item" href="#">스마트공장지원사업</a>
                            <a class="dropdown-item" href="#">견적/방문상담</a>
                            <a class="dropdown-item" href="#">회사소개</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown lnb">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="lnbMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ERP
                        </a>
                        <div class="dropdown-menu" aria-labelledby="lnbMenu">
                            <a class="dropdown-item" href="#">회계프로그램</a>
                            <a class="dropdown-item" href="#">ERP</a>
                            <a class="dropdown-item" href="#">그룹웨어</a>
                            <a class="dropdown-item" href="#">클라우드/IDC</a>
                            <a class="dropdown-item" href="#">기업보안(보안솔루션)</a>
                            <a class="dropdown-item" href="#">바코드 솔루션</a>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </div>
    
    <!-- Content -->
    <main id="content">
        <nav class="tab-menu">
            <div class="container">
                <ul>
                    <li><a href="/product/business_icube.php">기업용 iCUBE</a></li>
                    <li><a href="/product/icube_g20.php">비영리용 iCUBE-20</a></li>
                    <li><a href="/product/build_icube.php">건설기업용 iCUBE-20</a></li>
                    <li><a href="/product/erp_iu.php">ERP iU</a></li>
                    <li><a href="/product/mes_pop.php">MES/POP</a></li>
                    <li><a href="/product/scm.php">SCM</a></li>
                    <li class="active"><a href="/product/barcode.php">BARCODE</a></li>
                    <li><a href="/product/sfa.php">SFA</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="container">
            <div class="section-header">
                <h3>BARCODE (바코드 관리)</h3>
            </div>
            <article class="barcode">
                <div class="article-header">
                    <div class="row">
                        <div class="col-6">
                            <figure>
                                <img src="/comm/images/product/img_barcode_top.jpg" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="col-6">
                            <div class="page-summary">
                                <h4 class="page-title">바코드관리 <span class="msr">BARCODE</span></h4>
                                <p class="summarize">ERP와 연동되어 <b>정확한 재고관리 가능</b></p>
                                <hr>
                                <ul class="dashed-list blue long">
                                    <li>바코드 시스템은 늘어만 가는 기/자재, 비품, 재고 등의 자산정보를 수기로 취합할 때 발생하는 시간, 인력, 오기입으로 인해 발생하는 손실을 최대한 줄기면서 신속하고도 정확하게 집계된 DATA와 ERP 시스템의 연동을 통해 업무효율을 향상시킵니다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-content">
                    <div class="block-diagram">
                        <div class="strapline">
                            <h4>구성도</h4>
                        </div>
                        <figure>
                            <img src="/comm/images/product/img_barcode_block_diagram.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>