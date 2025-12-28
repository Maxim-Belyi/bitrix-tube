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

<pre style="background: #fff; color: #000; padding: 10px; border: 1px solid blue; text-align: left;">
	<?php print_r($arResult); ?>
</pre>
<section class="who-area-are pad-90" id="about_us">
	<div class="container">
		<h2 class="title-1"><?= $arResult["PROPERTIES"]["detail_title"]["VALUE"] ?></h2>
		<div class="row">
			<div class="col-md-7">
				<div class="who-we">
					
						<?= $arResult["PROPERTIES"]["detail_desc"]["~VALUE"]["TEXT"] ?>
				</div>
			</div>
			<div class="col-md-5">
				<div class="about-bg">
					<img src="<?= $arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"]?>" />
				</div>
			</div>
		</div>
	</div>
</section>
</div>

<div class="img-gallery-area pt-30 pb-60">
	<div class="container">
		<div class="row">
			<?php foreach ($arResult["PROPERTIES"]["gallery"]["VALUE"] as $image): ?>
				<?php $fileSrc = cFile::GetPath($image); ?>

				<div class="col-md-6 col-sm-4">
					<div class="img-gallery hover-bg-opacity mb-30">
						<a class="image-link" href="<?= $fileSrc ?>">
							<img src="<?= $fileSrc ?>" alt="<?= $arResult["NAME"] ?>" /></a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>