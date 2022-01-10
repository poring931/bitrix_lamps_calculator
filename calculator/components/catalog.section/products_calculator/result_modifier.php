<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

//P($arResult["ITEMS"]);
//P(SITE_ID);

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

foreach ($arResult["ITEMS"] as $key => $arProduct) {
    
    $arProduct["ITEMS"][$key]["PROPERTIES"]["UGOL"]["VALUE"] = $ugol;
    
    /* достаем свойства связанных модификаций */
    
   $modifID = $arProduct["ID"]; // текущая серия
   $modifIblockID = 4; //ID инфоблока модификаций
    //P($modifID);
   
   if(SITE_ID == "s1") {
        $arFilter1 = array(
            "IBLOCK_ID" => $modifIblockID,
            "UF_PRODUCT" => $modifID, 
        );       
   } else {
        $arFilter1 = array();       
   }
   

    
    
   $arresult = CIBlockSection::GetList(Array("SORT"=>"ASC"),$arFilter1, false); // достаем разделы в ИБ модификаций, которые относятся к текущей серии
   
   $x = 0;
   while ($arSect = $arresult->GetNext())
   {
       //P($arSect);
       $arMofid[$x] = $arSect["ID"];
       
       $x++;
   }
    //P($arMofid);
    
    $activeElements = 0;
    foreach ($arMofid as $arM ){
        $activeElements = $activeElements + CIBlockSection::GetSectionElementsCount($arM, Array("CNT_ACTIVE"=>"Y"));
    }
    
    //P($activeElements);
    
    if($activeElements > 0) {
    
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID"=>$modifIblockID, "SECTION_ID" => $arMofid, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");

        $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);

        $i = 0;
        while($ob = $res -> GetNextElement()){ 
            $arFields = $ob->GetFields();  
                $arResult["ITEMS"][$key]["MODIF"][$i] = $arFields;
            $arProps = $ob->GetProperties();
                $arResult["ITEMS"][$key]["MODIF"][$i]["PROPERTIES"] = $arProps;
            $i++;
        }    
    
        $z = 0;
        foreach ($arResult["ITEMS"][$key]["MODIF"] as $kod => $arModif) {
            $price = $arModif["PROPERTIES"]["MODIF_COST"]["VALUE"][0];
            if($price > 0) {
                $arPrice[$z] = $price;
            }
            $power = $arModif["PROPERTIES"]["POWER"]["VALUE"];
            if($power > 0) {
                $arPower[$z] = $power;

            }
            $potok = $arModif["PROPERTIES"]["SV_POTOK"]["VALUE"];
            if($potok > 0) {
                $arPotok[$z] = $potok;
            }   
            $napr = $arModif["PROPERTIES"]["NAPR"]["VALUE"];
            if(strlen($napr) > 0) {
                $arNapr[$z] = $napr;
            }     

            $ip = $arModif["PROPERTIES"]["IP"]["VALUE"];
            if(strlen($ip) > 0) {
                $arIP[$z] = $ip;
            }  


            $z++;
        }


        $arResult["ITEMS"][$key]["MODELS"]["PRICES"]["MIN"] = min($arPrice);
        $arResult["ITEMS"][$key]["MODELS"]["PRICES"]["MAX"] = max($arPrice);

        $arResult["ITEMS"][$key]["MODELS"]["POWER"]["MIN"] = min($arPower);
        $arResult["ITEMS"][$key]["MODELS"]["POWER"]["MAX"] = max($arPower);
        $arResult["ITEMS"][$key]["MODELS"]["POWER"]["COUNT"] = count($arPower);

        $arResult["ITEMS"][$key]["MODELS"]["SV_POTOK"]["MIN"] = min($arPotok);
        $arResult["ITEMS"][$key]["MODELS"]["SV_POTOK"]["MAX"] = max($arPotok);
        $arResult["ITEMS"][$key]["MODELS"]["SV_POTOK"]["COUNT"] = count($arPotok);

        $arResult["ITEMS"][$key]["MODELS"]["NAPR"] = array_unique($arNapr);

        $arResult["ITEMS"][$key]["MODELS"]["IP"] = array_unique($arIP);
    
    
        }
 
        unset($arMofid, $arPrice, $arPower, $arPotok, $arNapr, $arIP);
}

