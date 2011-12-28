(function($)
{
	$(function(){
		$('.navigation li a').live('click', function(){
			$(".navigation .active").removeClass("active");
			$(this).addClass("active");
			//return false;				
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
        $("#slides2 a.natural").addClass("active");
	    $("#slides3 a.casual").addClass("active");
	    $("#slides4 a.noche").addClass("active");
	    $("#slides5 a.fantasia").addClass("active");
		/*
		$("ul.look_btn li a").each(function(){
		  var $ul_pagination = $(this).attr("href",url+"#0");
           $(this).click($ul_pagination);			
		});
		*/
		 /*
		$(".look_cont img").hide();
		$("ul.look_btn li:first-child a").addClass("active").show();
		$(".look_cont img:first-child").show();

		$("ul.look_btn li").on('click', function(){
			$(this).siblings().children('a').removeClass("active");
			$(this).children('a').addClass("active");
			
			var $images = $(this).parents('.look_box').find('.look_cont img');
			$images.hide();
			var activeIndex = $(this).index();
			$images.eq(activeIndex).fadeIn();
			
			return false;
		});
		*/
		$('.navigation a , .look_btn a').click(function () {
			$.scrollTo($(this).attr('href'), 800);
			return false;
		});
		$('.pagination a, .prev, .next').click(function () {
			var $parent_slide = $(this).parents('.cont');					
			$.scrollTo($parent_slide, 200);
			return false;
		});
		/*
		$('.video iframe').each(function(){
           var url = $(this).attr("src")
           $(this).attr("src",url+"?wmode=transparent")
        });
		*/
	});
})(jQuery);