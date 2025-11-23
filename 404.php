<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
echo "<h1>404 Такой страницы нет</h1>";
echo "<p> Это страница 404.php, которая лежит в root/404.php";
//$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
//	"LEVEL"	=>	"3",
//	"COL_NUM"	=>	"2",
//	"SHOW_DESCRIPTION"	=>	"Y",
//	"SET_TITLE"	=>	"Y",
//	"CACHE_TIME"	=>	"36000000"
//	)
//);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<h1>404 Такой страницы нет</h1>

