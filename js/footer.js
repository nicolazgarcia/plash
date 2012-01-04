(function($)
{
	$(function(){
		var $doc = $(document);
		var $win = $(window);
		// dimensions - we want to cache them on window resize
		var windowHeight, windowWidth;
		var fullHeight, scrollHeight;
		var streetImgWidth = 520, streetImgHeight = 545;
		calculateDimensions();
	
		var currentPosition = -1, targetPosition = 0;
		var $videoContainer = $('.video_lasplash');
		var video = $('.video_lasplash > img')[0];
		var $hotspotElements = $('[data-position]');
		// handling resize and scroll events			
		function calculateDimensions() {
			windowWidth = $win.width();
			windowHeight = $win.height();
			fullHeight = $('#main').height();
			scrollHeight = fullHeight - windowHeight;
		}			
		function handleResize() {
			calculateDimensions();
			resizeBackgroundImage();
			handleScroll();
		}			
		function handleScroll() {
			targetPosition = $win.scrollTop() / scrollHeight;
		}			
		// main render loop
		window.requestAnimFrame = (function(){
		  return  window.requestAnimationFrame       ||
		          window.webkitRequestAnimationFrame ||
		          window.mozRequestAnimationFrame    ||
		          window.oRequestAnimationFrame      ||
		          window.msRequestAnimationFrame     ||
		          function(/* function */ callback, /* DOMElement */ element){
		            window.setTimeout(callback, 1000 / 60);
		          };
		})();
		function animloop(){
			if ( Math.floor(currentPosition*5000) != Math.floor(targetPosition*5000) ) {
				currentPosition += (targetPosition - currentPosition) / 5;
				render(currentPosition);
			}
		  requestAnimFrame(animloop);
		}
		// rendering
		function render( position ) {
			// position the elements
			var minY = -windowHeight, maxY = windowHeight;
			$.each($hotspotElements,function(index,element){
				var $hotspot = $(element);
				var elemPosition = Number( $hotspot.attr('data-position') );
				var elemSpeed = Number( $hotspot.attr('data-speed') );
				var elemY = windowHeight/2 + elemSpeed * (elemPosition-position) * scrollHeight;
				if ( elemY < minY || elemY > maxY ) {
					$hotspot.css({'visiblity':'none', top: '-1000px','webkitTransform':'none'});
				} else {
					$hotspot.css({'visiblity':'visible', top: elemY, position: 'fixed'});
				}
			});				
			renderVideo( position );
		}
		function resizeBackgroundImage(){
			// get image container size
			var scale = Math.max( windowHeight/streetImgHeight , windowWidth/streetImgWidth );
			var width = scale * streetImgWidth , height = scale * streetImgHeight;
			var left = (windowWidth-width)/2, top = (windowHeight-height)/2;
			$videoContainer
					  .width(width).height(height)
					  .css('position','fixed')
					  .css('left',left+'px')
					  .css('top',top+'px');
		}
		// video handling
		var imageSeqLoader = new ProgressiveImageSequence( $('body').attr('data-blogurl')+"/wp-content/themes/plash/images/bg/video-{index}.jpg" , 961 , {
			indexSize: 4,
			initialStep: 16,
			onProgress: handleLoadProgress,
			onComplete: handleLoadComplete,
			stopAt: 1
		} );
		var loadCounterForIE = 0; // there seems to be a problem with ie calling the callback several times
		imageSeqLoader.loadPosition(currentPosition,function(){
			loadCounterForIE++;
			if ( loadCounterForIE == 1 ) {
				renderVideo(currentPosition);
				imageSeqLoader.load();
				imageSeqLoader.load();
				imageSeqLoader.load();
				imageSeqLoader.load();
			}
		});
		var currentSrc, currentIndex;
		function renderVideo(position) {
			var index = Math.round( currentPosition * (imageSeqLoader.length-1) );
			var img = imageSeqLoader.getNearest( index );
			var nearestIndex = imageSeqLoader.nearestIndex;
			if ( nearestIndex < 0 ) nearestIndex = 0;
			var $img = $(img);
			var src;
			if ( !!img ) {
				src = img.src;
				if ( src != currentSrc ) {
					video.src = src;
					currentSrc = src;
				}
			}
		}
		$('body').append('<div class="loader"><img src="$('body').attr('data-blogurl')+"/wp-content/themes/plash/images/loader.gif"><div id="loading-bar"></div></div>');			
		function handleLoadProgress() {
			var progress = imageSeqLoader.getLoadProgress() * 100;
			$('#loading-bar').css({width:progress+'%',opacity:1});
		}
		function handleLoadComplete() {
			$('#loading-bar').css({width:'100%',opacity:0,});
			$('.loader').fadeOut();
		}
		$win.resize( handleResize );
		$win.scroll( handleScroll );
		handleResize();
		animloop();
	});
})(jQuery);