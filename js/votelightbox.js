(function($)
{
	$.fn.votelightbox = function()
	{
		var openLightBox = function(e)
		{
			var img_src = $(this).parent().attr('data-img-src');
			$('#big-pic img').attr('src', img_src);
			$('#lightbox').fadeIn();
		}

		var closeLightBox = function(e)
		{
			$('#lightbox').fadeOut();
		}

		$('.wp-polls-ul input').on('click', openLightBox);
		$('#close-box').on('click', closeLightBox);
	}

	$(function(){
		new $.fn.votelightbox();
	});
})(jQuery);
