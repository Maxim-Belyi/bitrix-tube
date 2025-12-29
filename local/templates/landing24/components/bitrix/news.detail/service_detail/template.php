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
					<img src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>"
						alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>" />
				</div>
			</div>
		</div>
	</div>
</section>
</div>

<div class="pb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 class="mb-30"><?= $arResult["PROPERTIES"]["points_subtitle"]["VALUE"]["0"] ?></h3>
				<div class="brand-accordion">
					<div class="panel-group icon angle-icon" id="accordion" role="tablist" aria-multiselectable="true">
						<?php foreach ($arResult["PROPERTIES"]["points"]["VALUE"] as $key => $value): ?>
							<?php $description = $arResult["PROPERTIES"]["points"]["DESCRIPTION"][$key]; ?>
							<?php if (!empty($value)): ?>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading<?= $key ?>">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion"
												href="#collapse<?= $key ?>"
												aria-expanded="<?= ($key == 0) ? 'true' : 'false' ?>"
												aria-controls="collapse<?= $key ?>">
												<?= $value ?>
											</a>
										</h4>
									</div>
									<div id="collapse<?= $key ?>" class="panel-collapse collapse <?= ($key == 0) ? 'in' : '' ?>"
										role="tabpanel" aria-labelledby="heading<?= $key ?>">
										<div class="panel-body">
											<?= $description ?>
										</div>
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<h3 class="mb-30"><?= $arResult["PROPERTIES"]["points_subtitle"]["VALUE"]["0"] ?></h3>
				<div class="my-tab">
					<?php if (!empty($arResult["PROPERTIES"]["stages"]["VALUE"])): ?>
						<ul class="custom-tab mb-15" role="tablist">
							<?php foreach ($arResult["PROPERTIES"]["stages"]["VALUE"] as $key => $value): ?>
								<li role="presentation" class="<?= ($key == 0) ? 'active' : '' ?>">
									<a href="#tab-<?= $key ?>" aria-controls="tab-<?= $key ?>" role="tab"
										data-toggle="tab"><?= $value ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
						<div class="tab-content">
							<?php foreach ($arResult["PROPERTIES"]["stages"]["VALUE"] as $key => $value): ?>
								<?php $description = $arResult["PROPERTIES"]["stages"]["DESCRIPTION"][$key]; ?>

								<div role="tabpanel" class="tab-pane fade <?= ($key == 0) ? 'in active' : '' ?>"
									id="tab-<?= $key ?>">
									<p><?= $description ?></p>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>