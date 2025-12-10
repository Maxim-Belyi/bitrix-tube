<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
/** @var array $arParams */
/** @var array */
/** @var $arResult */
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


<?php if (!empty($arResult["ITEMS"])): ?>
	<section class="project-count-area brand-bg pad-90">
		<div class="container">
			<div class="row">
				<?php foreach ($arResult["ITEMS"] as $arItem): ?>
					<div class="col-md-3 col-sm-3">
						<div class="single-count white-text text-center">
							<?= isset($arItem["DETAIL_TEXT"]) ? $arItem["DETAIL_TEXT"] : ''; ?>
							<h2> <?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT'] : ''; ?> </h2>
							<p> <?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?> </p>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- Инфографика -->
<!-- <section class="">
	<div class="container">
		<div class="row">
			<div class="">
				<div class="">
					<span class="icon-briefcase "></span>
					<h2 class="counter">360</h2>
					<p>Готовых проектов</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="single-count white-text text-center">
					<span class="icon-wine "></span>
					<h2 class="counter">690</h2>
					<p>Чашек кофе выпито</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="single-count white-text text-center">
					<span class="icon-lightbulb"></span>
					<h2 class="counter">420</h2>
					<p>Воплотили супер-идей</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="single-count white-text text-center">
					<span class="icon-happy"></span>
					<h2 class="counter">115</h2>
					<p>Счастливых клиентов</p>
				</div>
			</div>
		</div>
	</div>
</section> -->