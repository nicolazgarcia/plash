(function($)
{
	$.fn.votelightbox = function()
	{
		var openLightBox = function(e)
		{
			if ( $('.wp-polls-form').length == 0 ){
				$('#big-pic input').replaceWith('<p>Ya has votado por tu amiga, ¡cuéntale a más personas para que tu amiga sea finalista!</p>');
			}
			var img_src = $(this).parent().attr('data-img-src');
			$('#big-pic img').attr('src', img_src);
			$('#lightbox').fadeIn();
		}

		var closeLightBox = function(e)
		{
			$('#lightbox').fadeOut();
		}

		var sendVote = function(e)
		{
			var poll_id = $('.wp-polls-form input[name=poll_id]').val();
			poll_vote(2);

			$('#big-pic input').ajaxSuccess(function(e, xhr, settings) {
				if (xhr.status == 200){
					$(this).replaceWith('<p>¡Gracias! Tu voto ha sido enviado exitosamente</p>');
				}
			});
		}

		$('.wp-polls-ul input').on('click', openLightBox);
		$('#close-box').on('click', closeLightBox);
		$('#big-pic input').on('click', sendVote);
	}

	$(function(){
		new $.fn.votelightbox();
	});
})(jQuery);
