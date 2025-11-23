<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

?>
<?
IncludeTemplateLangFile(__FILE__);
?>


<!--[if lte IE 6]>
	<style type="text/css">

		#banner-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?= SITE_TEMPLATE_PATH ?>images/overlay.png', sizingMethod = 'crop');
		}

		div.product-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?= SITE_TEMPLATE_PATH ?>images/product-overlay.png', sizingMethod = 'crop');
		}

	</style>
	<![endif]-->

<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>О студии | WeCoders</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?php SITE_TEMPLATE_PATH ?>/assets/img/favicon.png">

<!--    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">-->
    <?$APPLICATION->ShowHead(); ?>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/animate-text.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/et-line.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/style.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/responsive.css">
    <script src="<?php SITE_TEMPLATE_PATH ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <?php
//                    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.min.css');
//                    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.css');
//                    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/animate-text.css');
//                    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/magnific-popup.css');
//                    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/et-line.css');
//                    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/pe-icon-7-stroke.css');
//                    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/shortcode/shortcodes.css');
//                    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/meanmenu.min.css');
//                    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/font-awesome.min.css');
//                    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/style.css');
//                    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/responsive.css');
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">');

    ?>


    <title><?php $APPLICATION->ShowTitle() ?></title>

</head>


<body>

<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста
    <a href="http://browsehappy.com/">обновите его</a>
</p>
<![endif]-->

<!-- Линия с контактами -->
<div class="header-top-area bg-color ptb-10 hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="welcome">
                    <span><i class="fa fa-envelope"></i> maxim@white.com</span>
                    <span><i class="fa fa-phone"></i> +79194029458</span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="social-icon-header text-right">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Шапка сайта (меню) -->
<header id="sticky-header" class="header-area header-wrapper white-bg">
    <!-- Меню (для десктопа) -->
    <div class="header-middle-area full-width">
        <div class="container">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- Логотип -->
                    <div class="col-md-2 col-sm-3 col-xs-8">
                        <div class="logo ptb-22">
                            <a href="index.html">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo/logo.png" alt="main logo">
                            </a>
                        </div>
                    </div>

                    <!-- Меню (основное) -->
                    <div class="col-md-10 col-sm-9 col-xs-4 text-right dark-menu">
                        <div class="header-main-menu hidden-xs">
                            <nav id="primary-menu">
                                <ul class="main-menu text-right">
                                    <li>
                                        <a href="index.php">Главная</a>
                                    </li>
                                    <li>
                                        <a href="about-us.php">О нас</a>
                                    </li>
                                    <li>
                                        <a href="services.html"> Услуги
                                            <span class="indicator"><i class="fa fa-angle-down"></i></span></a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="services_landing.html">Лендинг</a>
                                            </li>
                                            <li>
                                                <a href="services_online_shop.html">Интернет-магазин</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="portfolio.html"> Портфолио</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Блог</a>
                                    </li>
                                    <li>
                                        <a href="contacts.html">Контакты</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Поиск -->
                        <div class="header-right">
                            <div class="header-search">
                                <div class="search-wrapper">
                                    <a href="javascript:void(0);" class="search-open">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                    <div class="search-inside animated bounceInUp">
                                        <i class="icon-close search-close fa fa-times"></i>
                                        <div class="search-overlay"></div>
                                        <div class="position-center-center">
                                            <div class="search">
                                                <form>
                                                    <input type="search" placeholder="Поиск по сайту">
                                                    <button type="submit"><i class="fa fa-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Меню (для мобилки) -->
    <div class="mobile-menu-area visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li>
                                    <a href="index.html">Главная</a>
                                </li>
                                <li>
                                    <a href="about_us.html">О нас</a>
                                </li>
                                <li>
                                    <a href="services.html">Услуги</a>
                                    <ul>
                                        <li>
                                            <a href="services_landing.html">Лендинг</a>
                                        </li>
                                        <li>
                                            <a href="services_online_shop.html">Интернет-магазин</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="portfolio.html">Портфолио</a></li>

                                <li>
                                    <a href="blog.html">Блог</a>
                                </li>
                                <li>
                                    <a href="contacts.html">Контакты</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Хлебные крошки (навигация) -->
<div class="breadcrumb-area brand-bg ptb-100">
    <div class="container width-100">
        <div class="row z-index">
            <div class="col-md-7 col-sm-6">
                <div class="breadcrumb-title">
                    <h2 class="white-text">О студии</h2>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="breadcrumb-menu">
                    <ol class="breadcrumb text-right">
                        <li>
                            <a href="index.html">Главная</a>
                        </li>
                        <li>
                            <a href="#">О нас</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
