document.addEventListener('DOMContentLoaded', () => {

    
   setTimeout(() => {//выставляем на ПК параметры относительно картинки

     $('#room_width').offset({
        'top':$('.room_width').offset().top +70,
        'left':$('.room_width').offset().left +50
    })
    
     $('#room_length').offset({
        'top':$('.room_length').offset().top +120,
        'left':$('.room_length').offset().left +160
    })
    
     $('#room_height').offset({
        'top':$('.room_height').offset().top+80,
        'left':$('.room_height').offset().left+20
    })
    
     $('#room_workarea').offset({
        'top':$('.room_workarea').offset().top ,
        'left':$('.room_workarea').offset().left+20
    })
     $('#room_size').offset({
        'top':$('.calculator__grid__item__img_room svg').offset().top ,
        'left':$('.calculator__grid__item__img_room svg').offset().left

    })

    if (window.innerWidth<550){
        $('#room_width').offset({
            'top':$('.room_width').offset().top +50,
            'left':$('.room_width').offset().left +40
        })

        $('#room_length').offset({
            'top':$('.room_length').offset().top +60,
            'left':$('.room_length').offset().left +140
        })

        $('#room_height').offset({
            'top':$('.room_height').offset().top+40,
            'left':$('.room_height').offset().left+10
        })

        $('#room_workarea').offset({
            'top':$('.room_workarea').offset().top ,
            'left':$('.room_workarea').offset().left-50
        })
  
    }

   }, 1500);


   $('.calculator__grid__item_question').mousemove(function (e) { 
    //    $('.calculator__grid__item_question_hover').fadeOut();
       $(this).addClass('hovered');
       $('.calculator__grid__item_question:not(".hovered") .calculator__grid__item_question_hover').fadeOut('fast')
    //    $(this).find('.calculator__grid__item_question_hover').fadeIn();
   });
   $('.calculator__grid__item_question').mouseleave(function (e) { 
       $('.calculator__grid__item_question').removeClass('hovered')
       $('.calculator__grid__item_question_hover').fadeIn('fast')
   });




    $('input[type="range"]').on('input', function () {
        $('#range_light_value').val(this.value)
            var percent = Math.ceil(((this.value - this.min) / (this.max - this.min)) * 100);
            $(this).css('background', '-webkit-linear-gradient(left, #f1592a 0%, #f1592a ' + percent + '%, #FAC3B1 ' + percent + '%)');
    });
    $('#range_light_value').on('change input keyup', function () {
        
            let slide_item = document.querySelector('#range_light');
            // this.value = this.value.replace(/"."/g, ",");
           slide_item.value = this.value;
            var percent = Math.ceil(((slide_item.value - slide_item.min) / (slide_item.max - slide_item.min)) * 100);
            $(slide_item).css('background', '-webkit-linear-gradient(left, #f1592a 0%, #f1592a ' + percent + '%, #FAC3B1 ' + percent + '%)');
    });




    // Функции расчета
    function calc(param) { 
        
        let s = +$('.calculator__grid__item__img_capacity__value').text(),
            e = +$('#range_light_value').val(),
            kz = +$('.koeff_capacity').text(),
            u = 0.55,
            f = selected_item_sv_potok;//пока тут статика, потом передам число сюда
        var count_lamps;
       
        var lamps_obj = {
            s : +$('.calculator__grid__item__img_capacity__value').text(),
            e : +$('#range_light_value').val(),
            kz : +$('.koeff_capacity').text(),
            u : 0.55,
            f : selected_item_sv_potok,
            chislo_lamp : count_lamps,
        }

        count_lamps = ( e * s ) / ( u * f * kz);

        console.log(count_lamps)
        console.log(lamps_obj)
        if (lamps_obj.f){
            $('.count_lamps').text(Math.round(count_lamps))
                 $('#FORM222_FIELD_PRODUCT_NAME').val('')
                 $('#FORM222_FIELD_PRODUCT_NAME').val($('.p-item.ajaxitem.selected').eq(0).find('.h2').text().trim() + ' | ' + $('.count_lamps').text() + ' Шт')
         
           
        } else {
             showModal()
        }

        if (Math.round(count_lamps) == 0){
            showError()
        }
          
    }
    
    // увеличение значений при изменениии параметров комнаты
    function incrementRoomParam(selector,current_value){
       $('[id$="'+selector+'_value"]').text(current_value)
        if (selector == 'width' || selector=='length'){
            calcArea($('#room_width_value').text(),$('#room_length_value').text())
       }
    }
    function decrementtRoomParam(selector,current_value){
       $('[id$="'+selector+'_value"]').text(current_value)
       if (selector == 'width' || selector=='length'){
            calcArea($('#room_width_value').text(),$('#room_length_value').text())
       }
    }

    function calcArea (a,b){//площадь комнаты
        var calcArea_value = a*b;
        $('.calculator__grid__item__img_capacity__value').text(calcArea_value)
    }



    
   $('.calc_plus').click(function (e) { //функция увеличения значения параметров комнаты
        var current_value = $(this).parent().find('[class^="item__attr_"] input').val();
        var roomNameItem = $(this).parent().find('[class^="item__attr_"]')[0].classList[1];  
     
        current_value++;
        if (current_value == 9000){
            $(this).parent().find('[class^="item__attr_"] input').val(9000)
        }

        incrementRoomParam(roomNameItem,current_value)// увеличение значений при изменениии параметров комнаты
        $(this).parent().find('[class^="item__attr_"] input').val(current_value)
   
    });
   $('.calc_minus').click(function (e) {  //функция увеличения значения параметров комнаты
        var current_value = $(this).parent().find('[class^="item__attr_"] input').val();
        var roomNameItem = $(this).parent().find('[class^="item__attr_"]')[0].classList[1];   

        if (current_value <= 10 && current_value>1){
            current_value--;
            $(this).parent().find('[class^="item__attr_"] input').val( current_value)
            incrementRoomParam(roomNameItem,current_value)// уменьшение значений при изменениии параметров комнаты
           
        } else if (current_value >10){
            current_value--;
            $(this).parent().find('[class^="item__attr_"] input').val(current_value)
            incrementRoomParam(roomNameItem,current_value)// уменьшение значений при изменениии параметров комнаты
             
        }
        else { }
    });
    $('.item__attr_value input').on('change input keyup', function () {
        var current_value = $(this).val();
        var roomNameItem = $(this).parent()[0].classList[1]; 
        console.log($(this).parent()[0].classList[1])
         incrementRoomParam(roomNameItem,current_value)// уменьшение значений при изменениии параметров комнаты
          
    });

   

    //выбор коэффициентов в списке
    $('.calculator__grid__item__attr__select__item:not(.current_selected)').click(function (e) {
        if (!$(this).hasClass('current')){
            $(this).parent().find('.calculator__grid__item__attr__select__item.current').removeClass('current')
            $(this).parent().find('.current_selected .calculator__grid__item__attr__select__item_value').text($(this).text().trim())
            $(this).addClass('current')
             
            if (window.innerWidth < 550){
                // $('.calculator__grid__item__attr__select__item').attr('style', 'opacity:0')
                // $('.calculator__grid__item__attr__select__item').attr('style', '')
            }
        }
        
    });

    function showModal(){
        $('.overlay,.modal_products').fadeIn()
        $('.modal_products').addClass('active')
        $('body').css('overflow','hidden')
    }
    function hideModal(){
        $('.overlay').fadeOut()
        $('.modal_products').removeClass('active')
        $('body').css('overflow','inherit')
    }
    $('.overlay, .close_modal').click(function (e) { hideModal() });

    $('.choose__product:not(.calc_btn)').click(function (e) { 
        showModal()
    });
    $('.calc_btn').click(function (e) { 
        calc()
    });













    // часть выбора товара
    var selected_item_name,selected_item,selected_item_sv_potok;

	function lightSection(main_sect,second_sect){//функция подсветки менюшки
		$('.sections__ul>li>span[data-id="'+main_sect+'"]').addClass('current')
		if(!second_sect){
			$('.sections__ul li ul li span[data-id="'+second_sect+'"]').parent().addClass('current')
		}
	}
	function lightProducts(mainId,secondId){
		
		if(mainId){

				$('.p-item.ajaxitem.show_').removeClass('show_').fadeOut('slow')
				$('.p-item.ajaxitem[data-main-id="'+mainId+'"]').fadeIn('slow').addClass('show_')
		}
		if(secondId){
			
				$('.p-item.ajaxitem.show_').removeClass('show_').fadeOut('slow')
				$('.p-item.ajaxitem[data-seria-id="'+secondId+'"]').fadeIn('slow').addClass('show_')
		}
	}



    $('<div class="form_product"></div>').appendTo('#modalFORM222 .modal-body');
    $('#FORM222_FIELD_PRODUCT_NAME').parent().parent().css('display','none')
	$('.p-item.ajaxitem').click(function (e) { 
		
		if (!$(this).hasClass('selected')){
			$('.p-item.ajaxitem.selected').removeClass('selected')
			$(this).addClass('selected')
			$('.choosen__lamp').html($(this).find('.h2').html())
             $('#FORM222_FIELD_PRODUCT_NAME').val('')
            $('#FORM222_FIELD_PRODUCT_NAME').val($(this).find('.h2').text().trim() + ' | ' + $('.count_lamps').text() + ' Шт')
			
			$('.choosen__lamp').addClass('choosen__')
            $('.choosen__lamp_modal').text('')
            $('#modalFORM222 .modal-body .form_product').text('')
			$(this).clone().appendTo($('.choosen__lamp_modal').addClass('_choosen'))
			$(this).clone().appendTo($('.modal-body .form_product').addClass('_choosen'))
            if (window.innerWidth<560){
                $(".choose_lamp_block .choose__product").text('Выбрать другой').css('opacity','0.7')
                $('.choosen__lamp_modal').addClass('shown')
                $('.choose_lamp_block').addClass('shown_')
            }
		} 
       
        setTimeout(() => {
             hideModal()
        }, 500);
        // selected_item_sv_potok = $(this).find('.svetovoi_potok').text().trim().split('/')[0]
        selected_item_sv_potok = $(this).find('.svetovoi_potok').text().trim().split('/')[0].replace(/[^0-9\.]+/g, "")
		selected_item = $(this);
		console.log(selected_item)
		console.log(selected_item_sv_potok)
	});

	$('.sections__ul>li>span').click(function (e) { //клик по внешним разделам
		// console.log($(this).data('id'))
		$('.sections__ul>li>span.current').removeClass('current')
		$(this).addClass('current')

		
		$('.sections__ul li ul li.current').removeClass('current')
		lightProducts($(this).data('id'),'');
        $('.modal_products_sort').trigger('click')
	});
	$('.sections__ul li ul li span').click(function (e) { //клик по внутренним разделам
		// console.log($(this).data('id'))
		$('.sections__ul li ul li.current').removeClass('current')
		$(this).parent().addClass('current')

		if (!$(this).parents('.section_has_child_item ').find('span').eq(0).hasClass('current')){//меняем основной раздел
			$('.sections__ul>li>span.current').removeClass('current')
			$(this).parents('.section_has_child_item ').find('span').eq(0).addClass('current')
            
		}

		lightProducts('',$(this).data('id'));
        $('.modal_products_sort').trigger('click')
	});

    if (window.innerWidth>560){
        $('.choosen__lamp').mouseenter(function () { 
            
            $('.choosen__lamp_modal').addClass('shown')
        });
        $('.choosen__lamp').mouseleave(function () { 
         $('.choosen__lamp_modal').removeClass('shown')
        });
    }


	lightSection($('.p-item.ajaxitem.show_').eq(0).data('main-id'))//подсветка при загрузки страницы


    if(window.innerWidth <560){
        $('.modal_products_sort').click(function (e) { 
        $('.modal_products_sort svg').toggle(350)
        $('.modal_products .catalog-wrap-cont').toggleClass('overflow-hidden')
            $('.modal_products_sections').slideToggle(350)
        });
    }






    var myInput = document.querySelectorAll("input[type=number]");

        function keyAllowed(key) {
        var keys = [8, 9, 13, 16, 17, 18, 19, 20, 27, 46, 48, 49, 50,
            51, 52, 53, 54, 55, 56, 57, 91, 92, 93, 188 , 44
        ];
        if (key && keys.indexOf(key) === -1)
            return false;
        else
            return true;
        }

        myInput.forEach(function(element) {
        element.addEventListener('keypress', function(e) {
          
            var key = !isNaN(e.charCode) ? e.charCode : e.keyCode;
            if (!keyAllowed(key))
            e.preventDefault();

         

        }, false);

        // Disable pasting of non-numbers
        element.addEventListener('paste', function(e) {
            var pasteData = e.clipboardData.getData('text/plain');
            if (pasteData.match(/[^0-9]/))
            e.preventDefault();
        }, false);
        })



    $('input[type=number]').focusout(function () {
       if ($(this).val() == '' || $(this).val()<1){
           $(this).val(1)
            var current_value = $(this).val();
            var roomNameItem = $(this).parent()[0].classList[1]; 
            incrementRoomParam(roomNameItem,current_value)// уменьшение значений при изменениии параметров комнаты
       } 

       if ($(this).val() > 9000){
             $(this).val(9000)
            var current_value = $(this).val();
            var roomNameItem = $(this).parent()[0].classList[1]; 
            incrementRoomParam(roomNameItem,current_value)// уменьшение значений при изменениии параметров комнаты
       }

       
    });
    $('input[type=number]').on('change input keyup', function () {
        
           $(this).val($(this).val().replace('-',''))
    });

    function showError (){
        $('.calculator_modal_error').fadeIn()
        $('.calc_item_1 .calculator__grid__item__params_list>DIV, .calc_item_2 .calculator__grid__item__params_list>DIV,.calc_item_3 .calculator__grid__item__params_list>DIV').css('box-shadow','10px 5px 8px -4px #000')
        setTimeout(() => {
            $('.calculator_modal_error').fadeOut()
                  $('.calc_item_1 .calculator__grid__item__params_list>DIV, .calc_item_2 .calculator__grid__item__params_list>DIV,.calc_item_3 .calculator__grid__item__params_list>DIV').css('box-shadow','unset')
        }, 4000);
    }     
    $('.calculator_modal_error_close_modal').click(function (e) { 
        e.preventDefault();
         $('.calculator_modal_error').fadeOut()
        $('.calc_item_1 .calculator__grid__item__params_list>DIV, .calc_item_2 .calculator__grid__item__params_list>DIV,.calc_item_3 .calculator__grid__item__params_list>DIV').css('box-shadow','unset')
    });

    


});