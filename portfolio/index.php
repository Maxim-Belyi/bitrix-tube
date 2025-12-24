<?php
global $APPLICATION;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Наши работы");

$APPLICATION->SetPageProperty("title", "Портфолио");
?>
<section class="work-area pad-90">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/portfolio/title.php",
                        ]
                    ) ?>
                    </h2>
                <p><?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/portfolio/title.php",
                        ]
                    ) ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-menu brand-filter text-center mb-70">
                    <div class="filter" data-filter="all">Все</div>
                    <div class="filter" data-filter=".landing">Лендинги</div>
                    <div class="filter" data-filter=".internet_shop">Интренет магазины</div>
                    <div class="filter" data-filter=".promo">Промо сайты</div>
                    <div class="filter" data-filter=".corporative_site">Корпоративные порталы</div>
                </div>
            </div>

            <div id="Container">
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix landing promo">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/1.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/1.jpg">
                                        <span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="#">Green Planet</a>
                            </h4>
                            <h5 class="m-0">Дизайн</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix internet_shop corporative_site">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/2.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/2.jpg">
                                        <span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="#">Creative developers</a>
                            </h4>
                            <h5 class="m-0">Разработка лендинга</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix landing">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/3.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/3.jpg"><span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="../../../../bitrix/urlrewrite.php">Dress & Jeans</a>
                            </h4>
                            <h5 class="m-0">Разработка интернет-магазина</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix internet_shop">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/4.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/4.jpg"><span
                                            class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="../../../../bitrix/urlrewrite.php">Mountain King</a>
                            </h4>
                            <h5 class="m-0">Разработка сайта визитки</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix corporative_site">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/5.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/5.jpg">
                                        <span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="#">Beauty SPA</a>
                            </h4>
                            <h5 class="m-0">Разработка сайта визитки</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix promo">
                    <div class="portfolio-wrapper portfolio-title">
                        <div class="portfolio-img">
                            <img src="img/portfolio/6.jpg" alt=""/>
                            <div class="work-text brand-bg">
                                <div class="inner-text">
                                    <a class="view-portfolio image-link" href="img/portfolio/6.jpg"><span class="plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-heading pd-15">
                            <h4 class="mb-10">
                                <a href="#">Bent Application</a>
                            </h4>
                            <h5 class="m-0">Разработка лендинга</h5>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>