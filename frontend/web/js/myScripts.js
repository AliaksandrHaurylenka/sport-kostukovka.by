// JavaScript Document

$(document).ready(function() {

   // клик по иконке земного шара для выезжания иконок соц. сетей
      $('.header___nav-globe').click(function(){
        var icons = $(".header__icons");
        icons[ icons.is(':hidden') ? 'fadeIn' : 'fadeOut' ](300);
    });
	
	
	//Раскрывающаяся информация--------------------------------------

	$('.spoiler-title').click(function(){
		$('.spoiler-body').not($(this).parent().children('.spoiler-body')).slideUp('normal');
      	$(this).parent().children('.spoiler-body').slideDown('normal');
		return false;//ссылка остается на месте
	});

	//текст для закрытия раскрытого содержимого
	$('.spoiler-title_hide').click(function(){
    	$('.spoiler-body').slideUp('normal');
		return false;//ссылка остается на месте
	});


//АКТИВНАЯ ВКЛАДКА "ИСТОРИЯ"
	var pageHref = window.location.href;
	$('.aside-left__my-nav .dropdown, .additional-menu .dropdown').removeClass('active');
	$('.aside-left__my-nav .dropdown a, .additional-menu .dropdown a').each(function(){
	    var adress_history = 'http://sport-kostukovka.yii2-advanced/history';
	    var adress_hall = 'http://sport-kostukovka.yii2-advanced/hall-of-fame';
	    var adress_glass = 'http://sport-kostukovka.yii2-advanced/glass'; 
	    
	    if ((pageHref == adress_history) || (pageHref == adress_hall) || (pageHref == adress_glass)){
	                $('.aside-left__my-nav .dropdown, .additional-menu .dropdown').addClass('active');
	    }
	});
	
	
//МОДАЛЬНОЕ ОКНО СОБЫТИЙ - УВЕЛИЧЕНИЕ ИЗОБРАЖЕНИЯ ПРИ КЛИКЕ
	$('.photo_events img').click(function() {
		// Получаем адрес картинки
			var imgAddr = $(this).attr("src");
			// Задаем свойство SRC картинке, которая в скрытом диве.
			$('.img_big_block img').attr({src: imgAddr});
			// Показываем скрытый контейнер
			$('.img_big_block').fadeIn('slow');
	});
	// Обрабатывает клик по большой картинке
	$('.img_big_block').click(function() {
		$(this).fadeOut();
	});


// Модальное окно при первом посещении сайта
// Проверим, есть ли запись в куках о посещении посетителя
  // Если запись есть - ничего не делаем
  if (!$.cookie('was')) {

    // Покажем всплывающее окно
    // Если появилось новое событие, то
    // модальному окну,
    // в котором должна отобразиться новость,
    // прописываем класс .news-events
     $('.news-events').arcticmodal({
       closeOnEsc: true
    });

  }
  // Запомним в куках, что посетитель к нам уже заходил
  $.cookie('was', true, {
    expires: 7,//в днях хранение куки
    path: '/'
  });



});//конец ready