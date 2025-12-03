<?php
global $APPLICATION;
//$APPLICATION->SetTitle("Главная");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
<p>Текст на странице index.php</p>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>