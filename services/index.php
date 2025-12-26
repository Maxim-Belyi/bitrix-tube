<?php
global $APPLICATION;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("чем мы занимаемся");

$APPLICATION->SetPageProperty("keywords", "о нас, о компании, we coders, сайты");
$APPLICATION->SetPageProperty("services", "Чем мы занимаемся");
?>

<section class="who-area-are bg-color pad-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="who-we">
                    <h2 class="title-1">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/services/title.php",
                            ]
                        ) ?>
                    </h2>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/services/services-paragraph.php",
                        ]
                    ) ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="our-skill">
                    <h2 class="title-1">Skills</h2>

                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "skills_progress",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                            "AJAX_MODE" => "N",	// Включить режим AJAX
                            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
                            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                            "CACHE_TYPE" => "A",	// Тип кеширования
                            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                            "DISPLAY_DATE" => "N",	// Выводить дату элемента
                            "DISPLAY_NAME" => "Y",	// Выводить название элемента
                            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                            "FIELD_CODE" => array(	// Поля
                                0 => "NAME",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",	// Фильтр
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                            "IBLOCK_ID" => "9",	// Код информационного блока
                            "IBLOCK_TYPE" => "Content",	// Тип информационного блока (используется только для проверки)
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                            "NEWS_COUNT" => "20",	// Количество новостей на странице
                            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                            "PAGER_TITLE" => "Новости",	// Название категорий
                            "PARENT_SECTION" => "",	// ID раздела
                            "PARENT_SECTION_CODE" => "",	// Код раздела
                            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                            "PROPERTY_CODE" => array(	// Свойства
                                0 => "SKILLS_PROGRESS",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                            "SET_STATUS_404" => "N",	// Устанавливать статус 404
                            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                            "SHOW_404" => "N",	// Показ специальной страницы
                            "SORT_BY1" => "ID",	// Поле для первой сортировки новостей
                            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                            "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                        ),
                        false
                    ); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-area pt-90 pb-60">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/services/title-directions.php",
                        ]
                    ) ?>
                </h2>
                <p>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/services/directions-paragraph.php",
                        ]
                    ) ?>
                </p>
            </div>
        </div>

        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "about_directions",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "N",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                "DISPLAY_DATE" => "N",	// Выводить дату элемента
                "DISPLAY_NAME" => "Y",	// Выводить название элемента
                "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "FIELD_CODE" => array(	// Поля
                    0 => "NAME",
                    1 => "PREVIEW_TEXT",
                    2 => "DETAIL_TEXT",
                    3 => "IBLOCK_CODE",
                    4 => "IBLOCK_NAME",
                    5 => "",
                ),
                "FILTER_NAME" => "",	// Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "6",	// Код информационного блока
                "IBLOCK_TYPE" => "Content",	// Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "20",	// Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",	// Название категорий
                "PARENT_SECTION" => "",	// ID раздела
                "PARENT_SECTION_CODE" => "",	// Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                "SHOW_404" => "N",	// Показ специальной страницы
                "SORT_BY1" => "ID",	// Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
            ),
            false
        ); ?>
    </div>
</section>

        <? $APPLICATION->IncludeComponent(
            "bitrix:news",
            "services_site_dev",
            array(
                "ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
                "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "N",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                "DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "DETAIL_FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "",
                ),
                "DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
                "DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
                "DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
                "DETAIL_PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "",
                ),
                "DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
                "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                "DISPLAY_DATE" => "N",	// Выводить дату элемента
                "DISPLAY_NAME" => "Y",	// Выводить название элемента
                "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "10",	// Инфоблок
                "IBLOCK_TYPE" => "Content",	// Тип инфоблока
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "LIST_FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "",
                ),
                "LIST_PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "",
                ),
                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
                "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
                "NEWS_COUNT" => "20",	// Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",	// Название категорий
                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                "SEF_MODE" => "N",	// Включить поддержку ЧПУ
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                "SHOW_404" => "N",	// Показ специальной страницы
                "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела
                "USE_CATEGORIES" => "N",	// Выводить материалы по теме
                "USE_FILTER" => "N",	// Показывать фильтр
                "USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
                "USE_RATING" => "N",	// Разрешить голосование
                "USE_RSS" => "N",	// Разрешить RSS
                "USE_SEARCH" => "N",	// Разрешить поиск
                "USE_SHARE" => "N",	// Отображать панель соц. закладок
                "VARIABLE_ALIASES" => array(
                    "ELEMENT_ID" => "ELEMENT_ID",
                    "SECTION_ID" => "SECTION_ID",
                )
            ),
            false
        ); ?>


<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>