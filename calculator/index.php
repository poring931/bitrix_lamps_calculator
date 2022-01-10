<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("description", "Производство светодиодных светильников от крупного производителя освещения. Купить в компании «Лайтап» по оптовым ценам.");
$APPLICATION->SetPageProperty("keywords", "Светодиодные светильники оптом, компания LightUp");
$APPLICATION->SetPageProperty("title", "Калькулятор | светильники LightUp - купить по низким ценам");
$APPLICATION->SetTitle("Калькулятор");
use Bitrix\Main\Page\Asset;
         Asset::getInstance()->addCss("/calculator/calc.css");
         Asset::getInstance()->addJs("/calculator/calc.js");
?><?$APPLICATION->IncludeComponent(
	"slam:easyform", 
	"modal-obrzvonok", 
	array(
		"CATEGORY_EMAIL_IBLOCK_FIELD" => "FORM_EMAIL",
		"CATEGORY_EMAIL_PLACEHOLDER" => "",
		"CATEGORY_EMAIL_TITLE" => "Ваш E-mail",
		"CATEGORY_EMAIL_TYPE" => "email",
		"CATEGORY_EMAIL_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-emailaddress-message=\"E-mail введен некорректно\"",
		"CATEGORY_EMAIL_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_EMAIL_VALUE" => "",
		"CATEGORY_MESSAGE_IBLOCK_FIELD" => "PREVIEW_TEXT",
		"CATEGORY_MESSAGE_PLACEHOLDER" => "",
		"CATEGORY_MESSAGE_TITLE" => "Сообщение",
		"CATEGORY_MESSAGE_TYPE" => "textarea",
		"CATEGORY_MESSAGE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_MESSAGE_VALUE" => "",
		"CATEGORY_PHONE_IBLOCK_FIELD" => "FORM_PHONE",
		"CATEGORY_PHONE_INPUTMASK" => "N",
		"CATEGORY_PHONE_INPUTMASK_TEMP" => "+7 (999) 999-9999",
		"CATEGORY_PHONE_PLACEHOLDER" => "",
		"CATEGORY_PHONE_TITLE" => "Мобильный телефон",
		"CATEGORY_PHONE_TYPE" => "tel",
		"CATEGORY_PHONE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_PHONE_VALUE" => "",
		"CATEGORY_TITLE_IBLOCK_FIELD" => "NAME",
		"CATEGORY_TITLE_PLACEHOLDER" => "",
		"CATEGORY_TITLE_TITLE" => "Ваше имя",
		"CATEGORY_TITLE_TYPE" => "text",
		"CATEGORY_TITLE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_TITLE_VALUE" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CREATE_IBLOCK" => "",
		"CREATE_SEND_MAIL" => "",
		"DISPLAY_FIELDS" => array(
			0 => "TITLE",
			1 => "EMAIL",
			2 => "PHONE",
			3 => "HIDDEN",
			4 => "PRODUCT_NAME",
			5 => "",
		),
		"EMAIL_BCC" => "",
		"EMAIL_FILE" => "N",
		"EMAIL_SEND_FROM" => "N",
		"EMAIL_TO" => "",
		"ENABLE_SEND_MAIL" => "Y",
		"ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",
		"EVENT_MESSAGE_ID" => array(
		),
		"FIELDS_ORDER" => "TITLE,EMAIL,PHONE,HIDDEN,PRODUCT_NAME",
		"FORM_AUTOCOMPLETE" => "Y",
		"FORM_ID" => "FORM222",
		"FORM_NAME" => "Калькулятор",
		"FORM_SUBMIT_VALUE" => "Заказать",
		"FORM_SUBMIT_VARNING" => "Нажимая на кнопку \"#BUTTON#\", вы даете согласие на обработку <a target=\"_blank\" href=\"#\">персональных данных</a>",
		"HIDE_ASTERISK" => "N",
		"HIDE_FIELD_NAME" => "N",
		"HIDE_FORMVALIDATION_TEXT" => "N",
		"IBLOCK_ID" => "",
		"IBLOCK_TYPE" => "-",
		"INCLUDE_BOOTSRAP_JS" => "Y",
		"MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы калькулятора",
		"OK_TEXT" => "Ваше сообщение отправлено. Мы свяжемся с вами в течение 2х часов",
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
		),
		"SEND_AJAX" => "Y",
		"SHOW_MODAL" => "Y",
		"TITLE_SHOW_MODAL" => "Спасибо!",
		"USE_BOOTSRAP_CSS" => "Y",
		"USE_BOOTSRAP_JS" => "N",
		"USE_CAPTCHA" => "N",
		"USE_FORMVALIDATION_JS" => "Y",
		"USE_IBLOCK_WRITE" => "N",
		"USE_JQUERY" => "N",
		"USE_MODULE_VARNING" => "Y",
		"WIDTH_FORM" => "500px",
		"_CALLBACKS" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CATEGORY_HIDDEN_TITLE" => "Скрытое поле",
		"CATEGORY_HIDDEN_TYPE" => "hidden",
		"CATEGORY_HIDDEN_VALUE" => "",
		"CATEGORY_PRODUCT_NAME_TITLE" => "PRODUCT_NAME",
		"CATEGORY_PRODUCT_NAME_TYPE" => "text",
		"CATEGORY_PRODUCT_NAME_PLACEHOLDER" => "",
		"CATEGORY_PRODUCT_NAME_VALUE" => "",
		"CATEGORY_PRODUCT_NAME_VALIDATION_ADDITIONALLY_MESSAGE" => ""
	),
	false
);?>
<div class="catalog-wrap-cont">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"bread",
	Array(
		"COMPONENT_TEMPLATE" => "bread",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
</div>
<div class="calculator__wrapper catalog-wrap-cont">
	<h1>Калькулятор освещенности</h1>
	<div class="calculator__grid">
		<div class="calculator__grid__item calc_item_1">
			<div class="calculator__grid__item_title">
 <b>01</b> Выберите параметры помещения
			</div>
			<div class="calculator__grid__item__params_list">
				<div class="calculator__grid__item__attr">
					<div class="calculator__grid__item__attr_name">
						 Длина (м)
					</div>
					<div class="calculator__grid__item__attr_value">
						<div class="calc_minus">
 <img width="12" alt="-" src="/calculator/img/minus__icon.svg" height="1.1" loading="lazy">
						</div>
						<div class="item__attr_value length">
 <input type="number" min="1" id="input_length" name="" value="1" step="0.1" max='9000'>
						</div>
						<div class="calc_plus">
 <img width="12" src="/calculator/img/plus__icon.svg" height="12" loading="lazy" alt="+">
						</div>
					</div>
				</div>
				<div class="calculator__grid__item__attr">
					<div class="calculator__grid__item__attr_name">
						 Ширина (м)
					</div>
					<div class="calculator__grid__item__attr_value">
						<div class="calc_minus">
 <img width="12" alt="-" src="/calculator/img/minus__icon.svg" height="1.1" loading="lazy">
						</div>
						<div class="item__attr_value width">
 <input type="number" min="1" id="input_width" name="" value="1" step="0.1">
						</div>
						<div class="calc_plus">
 <img width="12" src="/calculator/img/plus__icon.svg" height="12" loading="lazy" alt="+">
						</div>
					</div>
				</div>
				<div class="calculator__grid__item__attr">
					<div class="calculator__grid__item__attr_name">
						 Высота (м)
					</div>
					<div class="calculator__grid__item__attr_value">
						<div class="calc_minus">
 <img width="12" alt="-" src="/calculator/img/minus__icon.svg" height="1.1" loading="lazy">
						</div>
						<div class="item__attr_value height">
 <input type="number" min="1" id="input_height" name="" value="1" step="0.1">
						</div>
						<div class="calc_plus">
 <img width="12" src="/calculator/img/plus__icon.svg" height="12" loading="lazy" alt="+">
						</div>
					</div>
				</div>
				<div class="calculator__grid__item__attr">
					<div class="calculator__grid__item__attr_name">
						 Рабочая поверхность (м)
					</div>
					<div class="calculator__grid__item__attr_value">
						<div class="calc_minus">
 <img width="12" alt="-" src="/calculator/img/minus__icon.svg" height="1.1" loading="lazy">
						</div>
						<div class="item__attr_value workarea">
 <input type="number" min="1" id="input_workarea" name="" value="1" step="0.1">
						</div>
						<div class="calc_plus">
 <img width="12" src="/calculator/img/plus__icon.svg" height="12" loading="lazy" alt="+">
						</div>
					</div>
				</div>
				<div class="calculator__grid__item__attr koef_otrajen">
					<div class="calculator__grid__item__attr_name">
						 Коэффициент отражения
					</div>
					<div class="calculator__grid__item_question">
						<div class="calculator__grid__item_question_hover">
 <img width="16" src="/calculator/img/question__icon.svg" height="16" loading="lazy" alt="?">
						</div>
						<div class="calculator__grid__item_question_answer">
							 Коэффициенты отражения характеризуют помещение. Первое число указывает на коэффициент отражения потолка, второй значение - стен, а третье - пола. По умолчанию для офисных помещений с белыми стенами и светлым потолком лучше ставить 80-50-30, если помещение темное, то выбирать меньшие параметры.
						</div>
					</div>
					<div class="calculator__grid__item__attr__select">
						<div class="calculator__grid__item__attr__select__item current_selected">
							<div class="calculator__grid__item__attr__select__item_value koeff_reflection">
								 80 50 30
							</div>
							<div class="calculator__grid__item__attr__select__item_img">
							</div>
						</div>
						<div class="calculator__grid__item__attr__select__item current">
							<div class="calculator__grid__item__attr__select__item_value">
								 80 50 30
							</div>
						</div>
						<div class="calculator__grid__item__attr__select__item">
							<div class="calculator__grid__item__attr__select__item_value">
								 70 50 30
							</div>
						</div>
						<div class="calculator__grid__item__attr__select__item">
							<div class="calculator__grid__item__attr__select__item_value">
								 70 30 30
							</div>
						</div>
						<div class="calculator__grid__item__attr__select__item">
							<div class="calculator__grid__item__attr__select__item_value">
								 50 50 30
							</div>
						</div>
						<div class="calculator__grid__item__attr__select__item">
							<div class="calculator__grid__item__attr__select__item_value">
								 50 30 30
							</div>
						</div>
						<div class="calculator__grid__item__attr__select__item">
							<div class="calculator__grid__item__attr__select__item_value">
								 50 30 10
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="calculator__grid__item calc_item_2">
			<div class="calculator__grid__item_title">
 <b>02</b> Выберите параметры освещения
			</div>
			<div class="calculator__grid__item__params_list">
				<div class="calculator__grid__item__attr koef_zapasa">
					<div class="calculator__grid__item__attr_name">
						 Коэффициент запаса
					</div>
					<div class="calculator__grid__item_question">
						<div class="calculator__grid__item_question_hover">
 <img width="16" src="/calculator/img/question__icon.svg" height="16" loading="lazy" alt="?">
						</div>
						<div class="calculator__grid__item_question_answer">
							 Для светодиодных ламп – 1.1 <!-- По умолчанию лучше ставить 1.3 -->
						</div>
					</div>
					<div class="calculator__grid__item__attr__select">
						<div class="calculator__grid__item__attr__select__item current_selected">
							<div class="calculator__grid__item__attr__select__item_value koeff_capacity">
								 1.6
							</div>
							<div class="calculator__grid__item__attr__select__item_img">
							</div>
						</div>
						<div class="calculator__grid__item__attr__select__item">
							<div class="calculator__grid__item__attr__select__item_value">
								 1.1
							</div>
						</div>
						<div class="calculator__grid__item__attr__select__item">
							<div class="calculator__grid__item__attr__select__item_value">
								 1.3
							</div>
						</div>
						<div class="calculator__grid__item__attr__select__item current">
							<div class="calculator__grid__item__attr__select__item_value">
								 1.6
							</div>
						</div>
						<div class="calculator__grid__item__attr__select__item">
							<div class="calculator__grid__item__attr__select__item_value">
								 1.7
							</div>
						</div>
					</div>
				</div>
				<div class="calculator__grid__item__attr osveshennost">
					<div class="calculator__grid__item__attr_name">
						 Уровень освещенности (лк)
					</div>
					<div class="calculator__grid__item_question osveshennost_q">
						<div class="calculator__grid__item_question_hover">
 <img width="16" src="/calculator/img/question__icon.svg" height="16" loading="lazy" alt="?">
						</div>
						<div class="calculator__grid__item_question_answer">
							 Рекомендуемый уровень освещенности в офисных помещениях общего назначения - 300 Лк, а в промышленных - 200 Лк
						</div>
					</div>
					<div>
					</div>
					<div class="calculator__grid__item__range_attr">
						<div id="" class="calculator__grid__item__range_attr_value">
 <input type="number" min="1" id="range_light_value" name="" min="10" max="30000" value="10" step="0.01">
						</div>
						<div class="calculator__grid__item__range">
 <input type="range" id="range_light" name="range_light" min="10" max="30000" value="10" step="0.01">
						</div>
					</div>
					<div class="calculator__grid__">
						<div>
							 10
						</div>
						<div>
							 30000
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="calculator__grid__item calc_item_3">
			<div class="calculator__grid__item_title">
 <b>03</b> Выбрать тип светильника
			</div>
			<div class="calculator__grid__item__params_list">
				<div class="calculator__grid__item__attr choose_lamp_block">
					<div class="choosen__lamp_modal">
					</div>
					<div class="calculator__grid__item__attr_name choosen__lamp ">
						 Выбрать светильник
					</div>
 <button type="button" class="choose__product">
					выбрать </button>
				</div>
			</div>
		</div>
		<div class="calculator__grid__item calc_item_4">
			<div class="calculator__grid__item_title">
 <b>04</b> Нажать "Рассчитать"
			</div>
			<div class="calculator__grid__item__params_list">
				<div class="calculator__grid__item__attr">
					<div class="calculator__grid__item__attr_name">
						 Рассчитать количество
					</div>
 <button type="button" class="choose__product calc_btn">
					РАССЧИТАТЬ </button>
				</div>
			</div>
		</div>
		<div class="calculator__grid__item calc_item_5">
			<div class="calculator__grid__item_title">
 <b>05</b> Вам потребуется
			</div>
			<div class="calculator__grid__item__params_list">
				<div class="calculator__grid__item__attr">
					<div class="calculator__grid__item__attr_name">
 <span class="count_lamps">0</span> Шт.
					</div>
 <button type="button" class="calc_submit" data-toggle="modal" data-target="#modalFORM222">
					заказать </button>
				</div>
			</div>
		</div>
    <div class="calculator__grid__item calc_item_6">
                    <div class="calculator__grid__item__img_capacity">
                       
                        <div class="calculator__grid__item__img_room">
                            <svg width="521" height="533" viewBox="0 0 521 533" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M520 315L517 317L327.5 199.5L4 395L1 393V194L327.5 1L520 118V315Z" fill="#F1592A"/>
                                    <path d="M517 317L520 315V118M517 317V120M517 317L327.5 199.5M517 120L520 118M517 120L327.5 4M520 118L327.5 1L1 194M1 194V393L4 395M1 194L4 196M4 395V196M4 395L327.5 199.5M4 196L327.5 4M327.5 4V199.5" stroke="#808099"/>
                                    <path d="M327.5 4L517 120V317L327.5 199.5V4Z" fill="#FEEFEA"/>
                                    <path d="M327.5 4L4 196V395L327.5 199.5V4Z" fill="#FEEFEA"/>
                                    <path d="M193.5 512.5L4 395L327.5 199.5L517 317L193.5 512.5Z" fill="#FEEFEA"/>
                                    <path d="M385 99.9497L459 145V221L385 176V99.9497Z" fill="white"/>
                                    <path d="M517 317L520 315V118M517 317V120M517 317L327.5 199.5M517 317L193.5 512.5L4 395M517 120L520 118M517 120L327.5 4M520 118L327.5 1L1 194M1 194V393L4 395M1 194L4 196M4 395V196M4 395L327.5 199.5M4 196L327.5 4M327.5 4V199.5" stroke="#000033"/>
                                    <path d="M385 176L459 221V217M385 176V100L388 101.824M385 176L388 174M388 174V101.824M388 174L459 217M388 101.824L459 145V217" stroke="#000033"/>
                                    <path d="M459 221L385 176V100L388 101.824V174L459 217V221Z" fill="#F1592A"/>
                                    <path d="M385 176L459 221V217L388 174M385 176V100L388 101.824V174M385 176L388 174" stroke="#000033"/>
                                    <path class='room_length' d="M520 338L514.227 338.089L517.191 343.044L520 338ZM194 533L199.773 532.911L196.809 527.956L194 533ZM515.881 339.881L197.605 530.261L198.119 531.119L516.395 340.739L515.881 339.881Z" fill="#F1592A"/>
                                    <path class='room_width' d="M1 416L3.76752 421.067L6.77188 416.137L1 416ZM193 533L190.232 527.933L187.228 532.863L193 533ZM4.58255 418.769L188.897 531.085L189.417 530.231L5.10292 417.915L4.58255 418.769Z" fill="#F1592A"/>
                                    <path class='room_height' d="M316.003 438L318.89 433L313.116 433L316.003 438ZM316.003 239L313.116 244L318.89 244L316.003 239ZM316.503 433.5L316.503 243.5L315.503 243.5L315.503 433.5L316.503 433.5Z" fill="#F1592A"/>
                                    <path class='room_workarea' d="M193.5 390L196.387 385L190.613 385L193.5 390ZM193.5 357L190.613 362L196.387 362L193.5 357ZM194 385.5L194 361.5L193 361.5L193 385.5L194 385.5Z" fill="#F1592A"/>
                                </svg>
                                <div id='room_size' class="calculator__grid__item__img_room__attribute">
                                    <div class="calculator__grid__item__img_capacity__title">
                                                    Общая площадь:
                                    </div>
                                    <div class="calculator__grid__item__img_capacity__value_item">
                                        <b class="calculator__grid__item__img_capacity__value">1</b><span>М</span><sup><small>2</small></sup>
                                            
                                            
                                    </div>
                                </div>
                                <div id='room_length' class="calculator__grid__item__img_room__attribute">
                                        <b id='room_length_value'>1</b><b>м</b>
                                        
                                        <div class="calculator__grid__item__img_room__attribute__title">
                                            Длина
                                        </div>
                                </div>
                                <div id='room_height' class="calculator__grid__item__img_room__attribute">
                                        <b id='room_height_value'>1</b><b>м</b>
                                        <div class="calculator__grid__item__img_room__attribute__title">
                                            Высота
                                        </div>
                                </div>
                                <div id='room_width' class="calculator__grid__item__img_room__attribute">
                                        <b id='room_width_value'>1</b><b>м</b>
                                        <div class="calculator__grid__item__img_room__attribute__title">
                                            Ширина
                                        </div>
                                </div>
                                <div id='room_workarea' class="calculator__grid__item__img_room__attribute">
                                        <b id='room_workarea_value'>1</b><b>м</b>
                                        <div class="calculator__grid__item__img_room__attribute__title">
                                            Рабочая <br> поверхность
                                        </div>
                                </div>
                        </div>
                    </div>
                </div>
	</div>
</div>
<div class="overlay">
</div>
<div class="modal_products">

	<div class="catalog-wrap-cont">
			<div class="modal_products_sort">
		<span>Сортировка по категориями</span>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" height="15" width="15" fill="#000000" viewBox="0 0 511.99998 511.99998" version="1.1" x="0px" y="0px"><g transform="translate(-91.214475,-152.15558)"><path style="opacity:1;fill:none;fill-opacity:1;fill-rule:evenodd;stroke:#fff;stroke-width:35px;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" d="m 119.0543,161.78526 177.0918,255.13422 0,237.60692 102.13673,-45.31044 0,-192.29648 177.09181,-255.13422 -456.32034,0 z"/></g></svg>
				<svg style="display:none" width="15" height="15" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="path-1-inside-12" fill="white">
<path d="M1.25 0L20 18.75L18.75 20L0 1.25L1.25 0Z"/>
<path d="M20 1.25L1.25 20L0 18.75L18.75 5.96047e-07L20 1.25Z"/>
</mask>
<path d="M1.25 0L2.66421 -1.41421L1.25 -2.82843L-0.164214 -1.41421L1.25 0ZM20 18.75L21.4142 20.1642L22.8284 18.75L21.4142 17.3358L20 18.75ZM18.75 20L17.3358 21.4142L18.75 22.8284L20.1642 21.4142L18.75 20ZM0 1.25L-1.41421 -0.164214L-2.82843 1.25L-1.41421 2.66421L0 1.25ZM20 1.25L21.4142 2.66421L22.8284 1.25L21.4142 -0.164214L20 1.25ZM1.25 20L-0.164214 21.4142L1.25 22.8284L2.66421 21.4142L1.25 20ZM0 18.75L-1.41421 17.3358L-2.82843 18.75L-1.41421 20.1642L0 18.75ZM18.75 5.96047e-07L20.1642 -1.41421L18.75 -2.82843L17.3358 -1.41421L18.75 5.96047e-07ZM-0.164214 1.41421L18.5858 20.1642L21.4142 17.3358L2.66421 -1.41421L-0.164214 1.41421ZM18.5858 17.3358L17.3358 18.5858L20.1642 21.4142L21.4142 20.1642L18.5858 17.3358ZM20.1642 18.5858L1.41421 -0.164214L-1.41421 2.66421L17.3358 21.4142L20.1642 18.5858ZM1.41421 2.66421L2.66421 1.41421L-0.164214 -1.41421L-1.41421 -0.164214L1.41421 2.66421ZM18.5858 -0.164214L-0.164214 18.5858L2.66421 21.4142L21.4142 2.66421L18.5858 -0.164214ZM2.66421 18.5858L1.41421 17.3358L-1.41421 20.1642L-0.164214 21.4142L2.66421 18.5858ZM1.41421 20.1642L20.1642 1.41421L17.3358 -1.41421L-1.41421 17.3358L1.41421 20.1642ZM17.3358 1.41421L18.5858 2.66421L21.4142 -0.164214L20.1642 -1.41421L17.3358 1.41421Z" fill="white" mask="url(#path-1-inside-12)"/>
</svg>

	</div>
		<svg class="close_modal" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1" fill="#F1592A">
                        <path d="M1.25 0L20 18.75L18.75 20L0 1.25L1.25 0Z"/>
                        <path d="M20 1.25L1.25 20L0 18.75L18.75 5.96047e-07L20 1.25Z"/>
                        </mask>
                    <path d="M1.25 0L2.66421 -1.41421L1.25 -2.82843L-0.164214 -1.41421L1.25 0ZM20 18.75L21.4142 20.1642L22.8284 18.75L21.4142 17.3358L20 18.75ZM18.75 20L17.3358 21.4142L18.75 22.8284L20.1642 21.4142L18.75 20ZM0 1.25L-1.41421 -0.164214L-2.82843 1.25L-1.41421 2.66421L0 1.25ZM20 1.25L21.4142 2.66421L22.8284 1.25L21.4142 -0.164214L20 1.25ZM1.25 20L-0.164214 21.4142L1.25 22.8284L2.66421 21.4142L1.25 20ZM0 18.75L-1.41421 17.3358L-2.82843 18.75L-1.41421 20.1642L0 18.75ZM18.75 5.96047e-07L20.1642 -1.41421L18.75 -2.82843L17.3358 -1.41421L18.75 5.96047e-07ZM-0.164214 1.41421L18.5858 20.1642L21.4142 17.3358L2.66421 -1.41421L-0.164214 1.41421ZM18.5858 17.3358L17.3358 18.5858L20.1642 21.4142L21.4142 20.1642L18.5858 17.3358ZM20.1642 18.5858L1.41421 -0.164214L-1.41421 2.66421L17.3358 21.4142L20.1642 18.5858ZM1.41421 2.66421L2.66421 1.41421L-0.164214 -1.41421L-1.41421 -0.164214L1.41421 2.66421ZM18.5858 -0.164214L-0.164214 18.5858L2.66421 21.4142L21.4142 2.66421L18.5858 -0.164214ZM2.66421 18.5858L1.41421 17.3358L-1.41421 20.1642L-0.164214 21.4142L2.66421 18.5858ZM1.41421 20.1642L20.1642 1.41421L17.3358 -1.41421L-1.41421 17.3358L1.41421 20.1642ZM17.3358 1.41421L18.5858 2.66421L21.4142 -0.164214L20.1642 -1.41421L17.3358 1.41421Z" fill="#F1592A" mask="url(#path-1-inside-1)"/>
                </svg>
		<div class="modal_products_container catalog-container">
			<div class="modal_products_sections">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"calculator_sections",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "calculator_sections",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"COUNT_ELEMENTS" => "Y",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "products",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LIST"
	)
);?>
			</div>
			<div class="modal_products_products products-list">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"products_calculator",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "products_calculator",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "shows",
		"ELEMENT_SORT_FIELD2" => "shows",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "asc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "products",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => array(),
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "400",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PROPERTY_CODE" => array(0=>"POWER",1=>"SV_POTOK",2=>"SV_POTOKSV",3=>"SV_SPPECTR",4=>"GARANTY",5=>"MODIF_COST",6=>"KOL_SD",7=>"SV_PULS",8=>"MODEL_SD",9=>"RASSEIVATEL",10=>"COLOR_TEMP",11=>"COLOR_IND",12=>"SVET_PROTECTION",13=>"CLIMATE",14=>"KREPLENIE",15=>"EXPL_TEMP",16=>"NAPRYAZHENIE",17=>"PROT_380",18=>"KRIV_SILY",19=>"EM_SOVM",20=>"RESURS_RABOTY",21=>"MASSA_SVET",22=>"GAB_RAZM",23=>"OPISANIE",24=>"base_url",25=>"",),
		"PROPERTY_CODE_MOBILE" => array(0=>"POWER",1=>"SV_POTOK",2=>"SV_POTOKSV",3=>"SV_SPPECTR",4=>"GARANTY",5=>"MODIF_COST",6=>"KOL_SD",7=>"SV_PULS",8=>"MODEL_SD",9=>"RASSEIVATEL",10=>"COLOR_TEMP",11=>"COLOR_IND",12=>"SVET_PROTECTION",13=>"CLIMATE",14=>"KREPLENIE",15=>"EXPL_TEMP",16=>"NAPRYAZHENIE",17=>"PROT_380",18=>"KRIV_SILY",19=>"EM_SOVM",20=>"RESURS_RABOTY",21=>"MASSA_SVET",22=>"GAB_RAZM",23=>"OPISANIE",24=>"base_url",),
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"UF_PRODUCT",1=>"",),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>
			</div>
		</div>
	</div>
</div>
<div class="catalog-wrap-cont">
	<div class="calculator_about_text">
		<h2 class="calculator_about_text_left">
			Алгоритм расчета
				освещенности
				помещений
		</h2>
		<div class="calculator_about_text_right">
			<p> В калькуляторе для расчета необходимого количества светодиодных светильников используется метод удельной мощности. </p>
			<p>В расчетах учитывается освещенность и от светильника, и освещенность создаваемая светодиодными приборами при отражении от потолка, стен и пола. Ключевым параметром расчета является наличие “коэффициента использования светового потока”. Значение коэффициента зависит от ряда параметров, который в нашем расчете берется из табличных значений. </p>
			<br>
			<br>
			<strong>
				Алгоритм расчета:
			</strong>
			<div class="calculator_about_item">
				<span>01</span>
				<span class="ml_10">Вычисление площади S = a × b </span>
			</div>
			<div class="calculator_about_item">
				<span>02</span>
				<span class="ml_10">Расчет индекса помещения i= S / ( h - h1 ) * ( a + b )</span>
			</div>
			<div class="calculator_about_item">
				<span>03</span>
				<span class="ml_10">Определение коэффициента осветительной установки U по таблицам на основании индекса помещений, коэффициента отражения </span>
			</div>
			<div class="calculator_about_item">
				<span>04</span>
				<span class="ml_10">Определение требуемого количества светильников по формуле </span>
			</div>
			<br>
			<div class="calculator_about_item about_item_gap">
				<span>N </span>
				<span> = ( E * S) / ( U * Ф * Кз)</span>
			</div>
			<div class="calculator_about_item about_item_gap">
				<span>Е </span>
				<span> – требуемая освещенность горизонтальной плоскости, Лк. </span>
			</div>
			<div class="calculator_about_item about_item_gap">
				<span>S </span>
				<span> – площадь помещения, м2 </span>
			</div>
			<div class="calculator_about_item about_item_gap">
				<span>Кз </span>
				<span> – коэффициент запаса. Он учитывает снижение яркости свечения по причине износа и/или загрязнения элементов осветительного прибора, а также загрязнения поверхностей помещения. </span>
			</div>
			<div class="calculator_about_item about_item_gap">
				<span>U </span>
				<span> – коэффициент использования осветительной установки. </span>
			</div>
			<div class="calculator_about_item about_item_gap">
				<span>Ф </span>
				<span>  – световой поток светильника, Лм. </span>
			</div>
			<br>
			<strong>Что нужно знать при расчете: </strong>
			<div class="calculator_about_item">
				<span>01</span>
				<span class="ml_10">Данный расчет не является точным! Если Вам необходимо посчитать необходимое количество светильников нужно оставить заявку на светотехнический расчет. Он выполняется нашими инженерами с учетом всех норм по СанПиН, СНиП, ГОСТ и т.д. </span>
			</div>
			<div class="calculator_about_item">
				<span>02</span>
				<span class="ml_10">Значения коэффициента отражения, коэффициента запаса указываются по умолчанию </span>
			</div>
			<div class="calculator_about_item">
				<span>03</span>
				<span class="ml_10">Уровень освещенности стоит по умолчанию, но рекомендуем уточнять необходимый уровень освещенности в вашем помещений у наших инженеров-проектировщиков </span>
			</div>
			<div class="calculator_about_item">
				<span>04</span>
				<span class="ml_10">Нельзя сравнивать светильники только по цене, а также только по мощности в разрезе в Лм/Вт. Одинаковое количество светильников может по-разному освещать пространство из-за ряда причин (диаграмма свечения, расстановка, мощность светодиодов, долговечность), а также обходиться вам в разную стоимость монтажа </span>
			</div>
			<div class="calculator_about_item">
				<span>05</span>
				<span class="ml_10">Покрытие светового рассеивателя имеет специальную обработку, чтобы не светить УФ-лучами и не портить зрение</span>
			</div>
		</div>
	</div>
</div>


<div class="calculator_modal_error">
	<svg class="calculator_modal_error_close_modal" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1" fill="#F1592A">
                        <path d="M1.25 0L20 18.75L18.75 20L0 1.25L1.25 0Z"></path>
                        <path d="M20 1.25L1.25 20L0 18.75L18.75 5.96047e-07L20 1.25Z"></path>
                        </mask>
                    <path d="M1.25 0L2.66421 -1.41421L1.25 -2.82843L-0.164214 -1.41421L1.25 0ZM20 18.75L21.4142 20.1642L22.8284 18.75L21.4142 17.3358L20 18.75ZM18.75 20L17.3358 21.4142L18.75 22.8284L20.1642 21.4142L18.75 20ZM0 1.25L-1.41421 -0.164214L-2.82843 1.25L-1.41421 2.66421L0 1.25ZM20 1.25L21.4142 2.66421L22.8284 1.25L21.4142 -0.164214L20 1.25ZM1.25 20L-0.164214 21.4142L1.25 22.8284L2.66421 21.4142L1.25 20ZM0 18.75L-1.41421 17.3358L-2.82843 18.75L-1.41421 20.1642L0 18.75ZM18.75 5.96047e-07L20.1642 -1.41421L18.75 -2.82843L17.3358 -1.41421L18.75 5.96047e-07ZM-0.164214 1.41421L18.5858 20.1642L21.4142 17.3358L2.66421 -1.41421L-0.164214 1.41421ZM18.5858 17.3358L17.3358 18.5858L20.1642 21.4142L21.4142 20.1642L18.5858 17.3358ZM20.1642 18.5858L1.41421 -0.164214L-1.41421 2.66421L17.3358 21.4142L20.1642 18.5858ZM1.41421 2.66421L2.66421 1.41421L-0.164214 -1.41421L-1.41421 -0.164214L1.41421 2.66421ZM18.5858 -0.164214L-0.164214 18.5858L2.66421 21.4142L21.4142 2.66421L18.5858 -0.164214ZM2.66421 18.5858L1.41421 17.3358L-1.41421 20.1642L-0.164214 21.4142L2.66421 18.5858ZM1.41421 20.1642L20.1642 1.41421L17.3358 -1.41421L-1.41421 17.3358L1.41421 20.1642ZM17.3358 1.41421L18.5858 2.66421L21.4142 -0.164214L20.1642 -1.41421L17.3358 1.41421Z" fill="#fff" mask="url(#path-1-inside-1)"></path>
		</svg>
	Неправильные входные данные или заполнили не все поля
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>