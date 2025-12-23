<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
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

$this->setFrameMode(true);
?>

<div class="row">
	<?php foreach ($arResult["ITEMS"] as $arItem): ?>
		<?php
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"] . "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		

		<?php if (!empty($arItem["NAME"])): ?>
		
			<div class="col-lg-3 col-md-3 col-sm-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<div class="single-pricing text-center mb-30">
					<div class="pricing-head">
						<h2 class="pricing-title text-uppercase"><?= $arItem["NAME"] ?></h2>
						<?php if (!empty($arItem["DETAIL_TEXT"])): ?>
							<span><?= $arItem["DETAIL_TEXT"] ?></span>
						<?php endif; ?>
					</div>
					<div class="pricing-plan-price <?=$arItem["PROPERTIES"]["BG_PRICE_BUTTON"]["VALUE_XML_ID"] ?>">
						<?= $arItem["PREVIEW_TEXT"] ?>
					</div>

					<div class="pricing-plan-list">
						<ul>
							<?php foreach ($arItem["PROPERTIES"]["DEV_LI_ITEMS"]["VALUE"] as $value): ?>
								<li><?=$value ?></li>
							<?php endforeach ?>
						</ul>
					</div>
					<div class="get-started">
						<a href="#" class="btn <?=$arItem["PROPERTIES"]["BG_PRICE_BUTTON"]["VALUE_XML_ID"]?>">Узнать больше</a>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>