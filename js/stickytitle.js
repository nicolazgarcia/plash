(function($)
{
	$.fn.stickytitle = function()
	{
		var atTheTop = function(element, index)
		{
			return $(window).scrollTop() >= el_tops[index];
		}
		
		var noScroll = function(){
			$('.navigation li').eq(0).children('a').addClass('active');
			$('.navigation li').slice(1).children('a').removeClass('active');
		}

		var elements = this;
		var el_tops = new Array();
		elements.each(function(index){
			el_tops[index] = $(this).offset().top;
		});
		
		noScroll();

		$(window).on('scroll', function(e){
			//primero se pone activa la casita, por si no se encuentra ninguna sección ativa
			noScroll();
			
			elements.each(function(index){
				var is_sticky = atTheTop(this, index);
				$(this).toggleClass('sticky', is_sticky);

				//hay que compensar el titulo que se saca del layout
				if (is_sticky){
					if ($(this).next('.fake_title').length == 0){
						$(this).after('<div class="fake_title"></div>');
					}
					
					$active_menu_li = $('.navigation li').eq(index+1);
					$active_menu_li.children('a').addClass('active');
					$active_menu_li.siblings().children('a').removeClass('active');
				}else{
					$(this).next('.fake_title').remove();
				}
			});
		});

		return this;
	}

	$(function(){
		$('.titulo').stickytitle();
	});
})(jQuery);
