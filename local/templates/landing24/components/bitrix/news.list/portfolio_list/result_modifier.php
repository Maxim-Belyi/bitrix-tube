<?php 
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$sectionID=[];
foreach ($arResult["ITEMS"] as $arItem) {
    if ($arItem["IBLOCK_SECTION_ID"]) {
        $sectionIds[] = $arItem["IBLOCK_SECTION_ID"];
    }
}
if (!empty($sectionIds)) {
    $sectionList = [];
    $rsSections = CIBlockSection::GetList(
        [],
        ["ID" => array_unique($sectionIds), "IBLOCK_ID" => $arParams["IBLOCK_ID"]],
        false,
        ["ID", "CODE"]
    );
    while ($arSection = $rsSections->Fetch()) {
        $sectionList[$arSection["ID"]] = $arSection;
    }

    foreach ($arResult["ITEMS"] as &$arItem) {
        $sId = $arItem["IBLOCK_SECTION_ID"];
        if (isset($sectionList[$sId])) {
            $arItem["SECTION_NAME"] = $sectionList[$sId]["NAME"];
            $arItem["SECTION_CODE"] = $sectionList[$sId]["CODE"];
        }
    }
    unset($arItem);
}