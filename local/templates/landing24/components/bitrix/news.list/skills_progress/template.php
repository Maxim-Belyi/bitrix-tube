<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

$this->setFrameMode(true);
?>

<?php foreach ($arResult["ITEMS"] as $arItem): ?>
	<?php
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"] . "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<div class="progress-list">

		<div class="progress" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<?php if (!empty($arItem["NAME"])); ?>
			<div class="lead"><?= $arItem["NAME"] ?> </div>
			<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
				style="width: <?=$arItem["PROPERTIES"]["SKILLS_PROGRESS"]["VALUE"]?>%;">
				<span><?= $arItem["PROPERTIES"]["SKILLS_PROGRESS"]["VALUE"]?>%</span>
			</div>
		</div>
	<?php endforeach; ?>