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

<div class="single-portfolio-area pt-90 pb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="portfolio-details">
					<h3><?= $arResult["PROPERTIES"]["detail_title"]["VALUE"] ?></h3>
					<?= $arResult["PROPERTIES"]["detail_description"]["~VALUE"]["TEXT"] ?>
				</div>
			</div>
			<div class="col-md-5">
				<div class="portfolio-meta">
					<ul>
						<?php foreach ($arResult["PROPERTIES"]["additional_info"]["VALUE"] as $key => $value): ?>
							<?php $description = $arResult["PROPERTIES"]["additional_info"]["DESCRIPTION"][$key]; ?>
							<?php if (!empty($value)): ?>
								<li>
									<span><b><?= $value ?>:</b> </span>
									<?= $description ?>
								</li>
							<?php endif; ?>

						<?php endforeach; ?>
					</ul>
					<a href="#" class="btn mt-30">Посмотреть сайт</a>
				</div>
			</div>
		</div>
	</div>
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