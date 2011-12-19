(function($)
{
	$.fn.stickytitle = function()
	{
		var atTheTop = function(index)
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
				var is_sticky = atTheTop(index);
				$(this).toggleClass('sticky', is_sticky);
			});
		});

		return this;
	}

	$(function(){
		$('.titulo').stickytitle();
	});
})(jQuery);
