(function($)
{
	$.fn.stickytitle = function()
	{
		var atTheTop = function(element, index)
		{
			return $(window).scrollTop() > el_tops[index];
		}

		var elements = this;
		var el_tops = new Array();
		elements.each(function(index){
			el_tops[index] = $(this).offset().top;
		});

		$(window).on('scroll', function(e){
			elements.each(function(index){
				var is_sticky = atTheTop(this, index);
				$(this).toggleClass('sticky', is_sticky);

				//hay que compensar el titulo que lo saco del layout
				if (is_sticky){
					if ($(this).next('.fake_title').length == 0){
						$(this).after('<div class="fake_title"></div>');
					}
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
