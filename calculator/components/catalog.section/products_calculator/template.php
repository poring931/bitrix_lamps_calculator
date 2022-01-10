<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
    use \Bitrix\Main\Localization\Loc;

    /**
     * @global CMain $APPLICATION
     * @var array $arParams
     * @var array $arResult
     * @var CatalogSectionComponent $component
     * @var CBitrixComponentTemplate $this
     * @var string $templateName
     * @var string $componentPath
     */

    $this->setFrameMode(true);

    if (!empty($arResult['NAV_RESULT']))
    {
    	$navParams =  array(
    		'NavPageCount' => $arResult['NAV_RESULT']->NavPageCount,
    		'NavPageNomer' => $arResult['NAV_RESULT']->NavPageNomer,
    		'NavNum' => $arResult['NAV_RESULT']->NavNum
    	);
    }
    else
    {
    	$navParams = array(
    		'NavPageCount' => 1,
    		'NavPageNomer' => 1,
    		'NavNum' => $this->randString()
    	);
    }

    $showTopPager = false;
    $showBottomPager = false;
    $showLazyLoad = true;

    if ($arParams['PAGE_ELEMENT_COUNT'] > 0 && $navParams['NavPageCount'] > 1)
    {
    	$showTopPager = $arParams['DISPLAY_TOP_PAGER'];
    	$showBottomPager = $arParams['DISPLAY_BOTTOM_PAGER'];
    	$showLazyLoad = $arParams['LAZY_LOAD'] === 'Y' && $navParams['NavPageNomer'] != $navParams['NavPageCount'];
    }

    $templateLibrary = array('popup', 'ajax', 'fx');
    $currencyList = '';

    if (!empty($arResult['CURRENCIES']))
    {
    	$templateLibrary[] = 'currency';
    	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
    }

    $templateData = array(
    	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
    	'TEMPLATE_LIBRARY' => $templateLibrary,
    	'CURRENCIES' => $currencyList
    );
    unset($currencyList, $templateLibrary);

    $elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
    $elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
    $elementDeleteParams = array('CONFIRM' => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));

    $positionClassMap = array(
    	'left' => 'product-item-label-left',
    	'center' => 'product-item-label-center',
    	'right' => 'product-item-label-right',
    	'bottom' => 'product-item-label-bottom',
    	'middle' => 'product-item-label-middle',
    	'top' => 'product-item-label-top'
    );

    $discountPositionClass = '';
    if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
    {
    	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
    	{
    		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
    	}
    }

    $labelPositionClass = '';
    if (!empty($arParams['LABEL_PROP_POSITION']))
    {
    	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
    	{
    		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
    	}
    }

    $arParams['~MESS_BTN_BUY'] = $arParams['~MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_BUY');
    $arParams['~MESS_BTN_DETAIL'] = $arParams['~MESS_BTN_DETAIL'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_DETAIL');
    $arParams['~MESS_BTN_COMPARE'] = $arParams['~MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_COMPARE');
    $arParams['~MESS_BTN_SUBSCRIBE'] = $arParams['~MESS_BTN_SUBSCRIBE'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_SUBSCRIBE');
    $arParams['~MESS_BTN_ADD_TO_BASKET'] = $arParams['~MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCS_TPL_MESS_BTN_ADD_TO_BASKET');
    $arParams['~MESS_NOT_AVAILABLE'] = $arParams['~MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCS_TPL_MESS_PRODUCT_NOT_AVAILABLE');
    $arParams['~MESS_SHOW_MAX_QUANTITY'] = $arParams['~MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCS_CATALOG_SHOW_MAX_QUANTITY');
    $arParams['~MESS_RELATIVE_QUANTITY_MANY'] = $arParams['~MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCS_CATALOG_RELATIVE_QUANTITY_MANY');
    $arParams['~MESS_RELATIVE_QUANTITY_FEW'] = $arParams['~MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCS_CATALOG_RELATIVE_QUANTITY_FEW');

    $generalParams = array(
    	'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
    	'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
    	'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
    	'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
    	'MESS_SHOW_MAX_QUANTITY' => $arParams['~MESS_SHOW_MAX_QUANTITY'],
    	'MESS_RELATIVE_QUANTITY_MANY' => $arParams['~MESS_RELATIVE_QUANTITY_MANY'],
    	'MESS_RELATIVE_QUANTITY_FEW' => $arParams['~MESS_RELATIVE_QUANTITY_FEW'],
    	'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
    	'USE_PRODUCT_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
    	'PRODUCT_QUANTITY_VARIABLE' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
    	'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
    	'ADD_PROPERTIES_TO_BASKET' => $arParams['ADD_PROPERTIES_TO_BASKET'],
    	'PRODUCT_PROPS_VARIABLE' => $arParams['PRODUCT_PROPS_VARIABLE'],
    	'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'],
    	'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
    	'COMPARE_PATH' => $arParams['COMPARE_PATH'],
    	'COMPARE_NAME' => $arParams['COMPARE_NAME'],
    	'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
    	'PRODUCT_BLOCKS_ORDER' => $arParams['PRODUCT_BLOCKS_ORDER'],
    	'LABEL_POSITION_CLASS' => $labelPositionClass,
    	'DISCOUNT_POSITION_CLASS' => $discountPositionClass,
    	'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
    	'SLIDER_PROGRESS' => $arParams['SLIDER_PROGRESS'],
    	'~BASKET_URL' => $arParams['~BASKET_URL'],
    	'~ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
    	'~BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE'],
    	'~COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
    	'~COMPARE_DELETE_URL_TEMPLATE' => $arResult['~COMPARE_DELETE_URL_TEMPLATE'],
    	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
    	'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
    	'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
    	'BRAND_PROPERTY' => $arParams['BRAND_PROPERTY'],
    	'MESS_BTN_BUY' => $arParams['~MESS_BTN_BUY'],
    	'MESS_BTN_DETAIL' => $arParams['~MESS_BTN_DETAIL'],
    	'MESS_BTN_COMPARE' => $arParams['~MESS_BTN_COMPARE'],
    	'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
    	'MESS_BTN_ADD_TO_BASKET' => $arParams['~MESS_BTN_ADD_TO_BASKET'],
    	'MESS_NOT_AVAILABLE' => $arParams['~MESS_NOT_AVAILABLE']
    );

    $obName = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $this->GetEditAreaId($navParams['NavNum']));
    $containerName = 'container-'.$navParams['NavNum'];

    //pp($arResult, true);
    //pp($arParams, true);


    ?>
<?
    if (!empty($arResult['ITEMS']) && !empty($arResult['ITEM_ROWS']))
    {
    	$areaIds = array();

           $i = 1;
    	?>

<?
    }

$tags_url = array('azs'=>38, 'sklad'=>41, 'stadion'=>42, 'zhkh'=>45, 'doroga'=>52, 'sportzal'=>53, 'proizvodstvo'=>54);       
?>
<div class="p-list ajaxmore porducts calculator">
    <?
        if ((!empty($arResult['ITEMS']) && !empty($arResult['ITEM_ROWS'])) || array_key_exists($arResult['ORIGINAL_PARAMETERS']['SECTION_CODE'],$tags_url))
        {
        	$areaIds = array();

               $i = 1;

        	foreach ($arResult['ITEMS'] as $item)
        	{
        // echo '<pre>';
        // var_dump($item);
        // echo '</pre>';  
        		$uniqueId = $item['ID'].'_'.md5($this->randString().$component->getAction());
        		$areaIds[$item['ID']] = $this->GetEditAreaId($uniqueId);
        		$this->AddEditAction($uniqueId, $item['EDIT_LINK'], $elementEdit);
        		$this->AddDeleteAction($uniqueId, $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);
                 $rsSections = CIBlockSection::GetByID($item["IBLOCK_SECTION_ID"]);
                $arSection = $rsSections->Fetch();
                $id_main = $arSection['IBLOCK_SECTION_ID'];
           ?>
    <div class="p-item ajaxitem <?if ($id_main == 6) echo 'show_';?>"
     data-seria-id="<?=$item["IBLOCK_SECTION_ID"];?>" 
     data-main-id="<?=$id_main;?>" 
     
     >
            <div class="img">
                <img loading="lazy" decoding="async" src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" >
            </div>
            <div class="info">

                <div class="h2">
                    <span class="category_name">
                        <?
                       
                          
                            if ($id_main == '6') { echo 'Офисный светильник';}
                           if ($id_main == '7') { echo 'Промышленный светильник';}
                           if ($id_main == '8') { echo 'Уличный светильник';}
                           if ($id_main == '5') { echo 'Фитосветильник';}
                           ?>
                    </span> <br>
                   <?=$item["NAME"]?>
                </div>


                <?//по новому макеты - нужно убрать на сериях на каталожной странице?>
                <div class="xarakt ">
                    <?if ($item["PROPERTIES"]['POWER']['VALUE']) {?>
                    <div>
                        <div class="one"><?=$item["PROPERTIES"]['POWER']['NAME'];?></div>
                        <div class="two">
                            <?=$item["PROPERTIES"]['POWER']['VALUE']?>
                        </div>
                    </div>
                    <?}?>
                    <?if ($item["PROPERTIES"]['SV_POTOK']['VALUE']) {?>
                    <div>
                        <div class="one"><?=$item["PROPERTIES"]['SV_POTOK']['NAME'];?></div>
                        <div class="two svetovoi_potok" >
                            <?=$item["PROPERTIES"]['SV_POTOK']['VALUE']?>
                        </div>
                    </div>
                    <?}?>
        
                    <?if ($item["PROPERTIES"]['SVET_PROTECTION']['VALUE']) {?>
                    <div>
                        <div class="one"><?=$item["PROPERTIES"]['SVET_PROTECTION']['NAME'];?></div>
                        <div class="two">
                            <?=$item["PROPERTIES"]['SVET_PROTECTION']['VALUE']?>
                        </div>
                    </div>
                    <?}?>
                    
                    <?if ($item["PROPERTIES"]['MODIF_COST']['VALUE']) {?>
                    <div class="price_product">
                        <div class="one boldPrice">
                            <?//=$item["PROPERTIES"]['MODIF_COST']['NAME'];?> Оптовая цена (с НДС)</div>
                        <div class="two boldPrice">
                            <?=$item["PROPERTIES"]['MODIF_COST']['VALUE'][0]?>
                        </div>
                    </div>
                    <?}?>
                </div>
            
            </div>
            <div class="fox-a choose_item"    data-seria-id="<?=$item["IBLOCK_SECTION_ID"];?>" 
     data-main-id="<?=$id_main;?>" ><span >Выбрать</span> </div>
    </div>
    <?}?>
</div>


 

  
 
    <?} else {?>
    <div class="nodata">
        <?=GetMessage("NODATA");?>
    </div>
    <?}?>
<div data-pagination-num="<?=$navParams['NavNum']?>" class="pagination_div" style="clear: both;">
    <!-- pagination-container -->
    <?=$arResult['NAV_STRING']?>
    <!-- pagination-container -->
</div>

<?
    $signer = new \Bitrix\Main\Security\Sign\Signer;
    $signedTemplate = $signer->sign($templateName, 'catalog.section');
    $signedParams = $signer->sign(base64_encode(serialize($arResult['ORIGINAL_PARAMETERS'])), 'catalog.section');
	
	
    ?>
