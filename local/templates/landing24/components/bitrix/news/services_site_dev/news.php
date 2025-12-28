<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true); ?>


<section id="pricing" class="pricing-area bg-color pt-60 pb-60">
	<div class="container">
		<div class="row">
			<div class="section-heading text-center mb-70">
				<h2>
					<?php $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						[
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/services/title_site_dev.php",
						]
					) ?>
				</h2>
				<p>
					<?php $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						[
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/services/site_dev_descr.php",
						]
					) ?>
				</p>
			</div>
			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"services_cards",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "Y",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "N",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "N",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "N",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(
						0 => "NAME",
						1 => "PREVIEW_TEXT",
						2 => "DETAIL_TEXT",
						3 => "",
					),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "10",
					"IBLOCK_TYPE" => "Content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "N",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "20",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(
						0 => "DEV_LI_ITEMS",
						1 => "BG_PRICE_BUTTON",
						2 => "",
					),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "ID",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "N",
					"COMPONENT_TEMPLATE" => "services_cards"
				),
				false
			); ?>
		</div>
	</div>
	</div>
</section>