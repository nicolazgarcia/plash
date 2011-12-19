(function($)
{
	$(function(){
		$('.navigation li a').live('click', function(){
			$(".navigation .active").removeClass("active");
			$(this).addClass("active");
			//return false;				
	    });
		$('.navigation a').bind('click',function(event){
	      var $anchor = $(this);
	        $('html, body').stop().animate({
	          scrollTop: $($anchor.attr('href')).offset().top
	          }, 1000);
	        event.preventDefault();
	    });
		$('#slides1, #slides2, #slides3, #slides4, #slides5').slides({
			generateNextPrev: true,
			generatePagination: true,
			slideSpeed: 250,
	    });
		// concursantes
	    $('.concursante img').css({'opacity':'0','visibility':'visible'});
	    $('.concursante').hover(function(){    
	      $(this).find('img').fadeTo(200, 1);
		}, function(){ 
	      $(this).find('img').fadeTo(500, 0);
	    });
		 // look
	    $("ul.look_btn span").css("opacity","0");
	    $("ul.look_btn span").hover(function () {
	     $(this).stop().animate({opacity: 1}, 'slow');
		 },
	     function () {
	      $(this).stop().animate({opacity: 0}, 'slow');
		 });
		$('ul.look_btn a').live('click', function(){
			$("ul.look_btn .active").removeClass("active");
			$(this).addClass("active");
		});
	});
})(jQuery);