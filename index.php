<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>LASPlash Cosmetics</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/global.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/fonts/stylesheet.css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Abel|Anton' rel='stylesheet' type='text/css'>
	<?php
	wp_enqueue_script('slides', get_bloginfo('template_directory').'/js/slides.min.jquery.js', array('jquery'));
	wp_enqueue_script('ProgressiveImageSequence', get_bloginfo('template_directory').'/js/ProgressiveImageSequence.class.js', array('jquery'));
	wp_enqueue_script('stickytitle', get_bloginfo('template_directory').'/js/stickytitle.js', array('jquery'));
	wp_enqueue_script('scripts', get_bloginfo('template_directory').'/js/scripts.js', array('jquery'));
	wp_head();
	?>
</head>
<body <?php body_class(); ?>>
<div id="main">
<div class="video_lasplash" style="z-index:-999;"><img src="<?php bloginfo( 'template_directory' ); ?>/images/bg/video-0001.jpg"></div>
   <div class="navigation">
    <ul>
      <li><a class="home" href="#portada">Inicio <span>home</span></a></li>
      <li><a class="intrucciones" href="#instrucciones">1 <span>Instrucciones</span></a></li>
      <li><a class="avances" href="#avances">2 <span>Avances</span></a></li>
      <li><a class="recursos" href="#recursos">3 <span>recursos</span></a></li>
    </ul>
  </div>
  <div id="portada" class="cont"> <a name="portada"></a>
    <div class="titulo"></div>
    <div class="content"> <span class="logo"><img src="<?php bloginfo( 'template_directory' ); ?>/images/comparte_tu_look.png"></span> <span class="frase">
      <h1 class="titulo_lasplash">Un Concurso de LASPlash cosmetics</h1>
      <?php if ( is_active_sidebar( 'home-widget-area' ) ) {
		dynamic_sidebar( 'home-widget-area' );
	  } ?>
      </span> </div>
    <!--content-->
  </div>
  <!--portada-->
  <div id="instrucciones" class="cont"> <a name="instrucciones"></a>
    <div class="titulo">
      <h1>Instrucciones del Concurso</h1>
    </div>
    <div id="slides1">
      <div class="slides_container">
        <div class="slide">
          <div class="content">
            <h3 class="subt reglas">Reglas del Concurso</h3>
            <div class="paso uno"> <span class="icono">paso 1</span> maquillate usando <br>
              uno de <b>nuestros productos</b> </div>
            <!--/paso uno-->
            <div class="paso dos"> <span class="icono">paso 2</span> Escoge una pose LASPlash <br>
              -Cubre tus labios, muestra tus ojos<br>
              -Cubre tus ojos, muestra tus labios <br>
              y tus uñas pintadas </div>
            <!--/paso dos-->
            <div class="paso tres"> <span class="linea"></span> <span class="icono">paso3</span> tomate una fotografia con la pose que escogiste, mostrando el <b>producto<br>
              LASPlash</b> que utilizaste <img src="<?php bloginfo( 'template_directory' ); ?>/images/demo_.png" alt="ejemplo " width="170" height="118"> </div>
            <!--/paso tres-->
          </div>
          <!--/content-->
        </div>
        <!--/slide-->
        <div class="slide">
          <div class="content">
            <div class="paso cuatro"> <span class="icono">paso4</span> Envianos tus fotografias <br>
              ya sea con una pose o con las dos ! <b>concurso@lasplashcosmetics.com.pa</b> </div>
            <!--/paso cuatro-->
            <div class="paso cinco"> <span class="icono">paso 5</span> Busca <b>LASPlash panama<b> en <b>facebook</b> para ver tu foto </div>
            <!-- /paso cinco-->
            <div class="paso seis"> <span class="icono">paso 6</span> Comparte tu foto con tus amigos, pulsando share. Las 5 fotos con mas likes llegara a finalista. </div>
            <!--/paso seis-->
            <div class="box"> <a class="down_pdf" href="">Instrucciones descargar pdf</a>
              <div class="globo_premio"><span class="guia"></span>Y podras ganarte <br>
                <b>UN CRUCERO PARA <br>
                DOS PERSONAS!!</b></span></div>
            </div>
            <!--/box-->
          </div>
          <!--/content-->
        </div>
        <!--/#slides1-->
      </div>
      <!--/slides_container-->
    </div>
    <!--/#slides-->
  </div>
  <!--cont /#instrucciones parte1-->
  <div class="cont">
    <div class="content">
      <h3 class="subt tips">Tips de Maquillaje</h3>
      <div class="video"><img src="<?php bloginfo( 'template_directory' ); ?>/images/demo_video.png" alt="demo video"></div>
      <span class="store_locator">STORELOCATOR <br>
      FARMACIAS REVILLA <br>
      SANBORNS <br>
      STEVEN´S</span> </div>
  </div>
  <!--cont /instrucciones parte 2-->
  <div id="avances" class="cont"> <a name="avances"></a>
    <div class="titulo">
      <h1>Avances del Concurso</h1>
    </div>
    <div class="content">
      <div class="box">
        <div class="globo_mas_votada">la foto <br>
          <b>m&aacute;s votada</b><span class="guia"></span>
        </div>
        <div class="avatar">
        <img alt="La foto mas votada" src="<?php bloginfo( 'template_directory' ); ?>/images/avatar_mas_votada.jpg">
        <span class="likes">1882<span class="left"></span><span class="right"></span></span>
        </div>
      </div>
      <!--/box-->
      <h3 class="subt total_c">Total de concursantes</h3>
      <div class="total_concursantes"> <span>1</span><span>2</span><span>9</span></div>
      <h3 class="subt ultimas_c">Ultimas concursantes</h3>
      <div class="ultimas_concursantes">
      <span class="concursante">
      maria rodriguez <span class="numero_likes">17</span>
      <img alt="maria rodriguez" src="<?php bloginfo( 'template_directory' ); ?>/images/avatar_votos.jpg">
      </span> 
      <span class="concursante">
      adriana g&oacute;mez <span class="numero_likes">54</span>
      <img alt="adriana g&oacute;mez" src="<?php bloginfo( 'template_directory' ); ?>/images/avatar_votos.jpg">
      </span> 
      <span class="concursante">
      sabrina guzman <span class="numero_likes">32</span>
      <img alt="sabrina guzman" src="<?php bloginfo( 'template_directory' ); ?>/images/avatar_votos.jpg">
      </span>
      </div>
      <!--/ultimas concursantes-->
    </div>
    <!--content-->
  </div>
  <!--/cont /#avances-->
  <div id="recursos" class="cont"> <a name="recursos"></a>
    <div class="titulo">
      <h1>Productos LASPlash</h1>
    </div>
    <div class="content">
      <h3 class="subt destacado">Porducto destacado</h3>
      <div class="box">
        <h3>Nombre del producto</h3>
        <p>Cupcake ipsum dolor sit amet carrot cake topping. Cotton candy pie ice cream chupa chups halvah liquorice. Faworki biscuit chocolate gummies carrot cake. Candy canes marshmallow ice cream sugar plum muffin tiramisu. Cookie jelly beans chocolate cake danish cake toffee bonbon topping sugar plum.</p>
        <img src="<?php bloginfo( 'template_directory' ); ?>/images/productos/lasplash_delineador.png"> </div>
    </div>
    <!--/content--> 
  </div>
  <!--/cont /#recursos--> 
  <div class="cont">
  	<div id="slides2">
    <div class="slides_container">
        <div class="slide">
         <div class="content">
            <h3 class="subt look">Looks LASPlash</h3>
            <div class="look_box">
                <ul class="look_btn">
                    <li><a class="natural" href="#">look natural<span></span></a></li>
                    <li><a class="casual" href="#">look casual<span></span></a></li>
                    <li><a class="noche" href="#">look noche<span></span></a></li>
                    <li><a class="fantasia" href="#">look fantasia<span></span></a></li>                </ul>
                <div class="look_cont">
                    <img alt="look natural">
                    <img alt="look casual">
                    <img alt="look noche">                 
                    <img alt="look fantasia">
                </div>    
            </div>
            <!--/look-->
          </div>
          <!--/content--> 
        </div>
        <!--/slide-->
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion">Danish gummies croissant marzipan pudding chocolate bar. Gummies cheesecake pudding.</span>            
            </div>
            <!--/box_producto-->
             <img alt="corrector" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="base" width="88" height="121">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion">Pastry faworki pastry faworki toffee pie carrot cake faworki. Lemon drops pudding applicake macaroon carrot cake. Chocolate bar</span>            
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content-->  
        </div>
        <!--/slide--> 
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion">Danish gummies croissant marzipan pudding chocolate bar. Gummies cheesecake pudding.</span>            
            </div>
            <!--/box_producto-->
             <img alt="blush" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="lipgloss" width="88" height="121">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion">Pastry faworki pastry faworki toffee pie carrot cake faworki. Lemon drops pudding applicake macaroon carrot cake. Chocolate bar</span>           
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content--> 
        </div>
        <!--/slide-->
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion">Danish gummies croissant marzipan pudding chocolate bar. Gummies cheesecake pudding.</span>            
            </div>
            <!--/box_producto-->
             <img alt="corrector" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="base" width="88" height="121">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion">Pastry faworki pastry faworki toffee pie carrot cake faworki. Lemon drops pudding applicake macaroon carrot cake. Chocolate bar</span>            
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content-->  
        </div>
        <!--/slide-->
      </div>
      <!--/slides_container-->
    </div>
    <!--#slides2--> 
  </div>
  <!--/cont-->
  
  <div class="cont">
  	<div id="slides3">
    <div class="slides_container">
        <div class="slide">
         <div class="content">
            <h3 class="subt look">Looks LASPlash</h3>
            <div class="look_box">
                <ul class="look_btn">
                    <li><a class="natural" href="#">look natural<span></span></a></li>
                    <li><a class="casual" href="#">look casual<span></span></a></li>
                    <li><a class="noche" href="#">look noche<span></span></a></li>
                    <li><a class="fantasia" href="#">look fantasia<span></span></a></li>                </ul>
                <div class="look_cont">
                    <img alt="look natural">
                    <img alt="look casual">
                    <img alt="look noche">                 
                    <img alt="look fantasia">
                </div>    
            </div>
            <!--/look-->
          </div>
          <!--/content--> 
        </div>
        <!--/slide-->
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion">Danish gummies croissant marzipan pudding chocolate bar. Gummies cheesecake pudding.</span>            
            </div>
            <!--/box_producto-->
             <img alt="corrector" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="base" width="88" height="121">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion">Pastry faworki pastry faworki toffee pie carrot cake faworki. Lemon drops pudding applicake macaroon carrot cake. Chocolate bar</span>            
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content-->  
        </div>
        <!--/slide--> 
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion">Danish gummies croissant marzipan pudding chocolate bar. Gummies cheesecake pudding.</span>             
            </div>
            <!--/box_producto-->
             <img alt="blush" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="lipgloss" width="88" height="121">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion">Pastry faworki pastry faworki toffee pie carrot cake faworki. Lemon drops pudding applicake macaroon carrot cake. Chocolate bar</span>             
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content--> 
        </div>
        <!--/slide-->
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
             <img alt="corrector" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="base" width="88" height="121">
            <div class="box_producto">
            <span class="nombre">Nombre del producto</span>
            <span class="descripcion">Pastry faworki pastry faworki toffee pie carrot cake faworki. Lemon drops pudding applicake macaroon carrot cake. Chocolate bar</span>             
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content-->  
        </div>
        <!--/slide-->
      </div>
      <!--/slides_container-->
    </div>
    <!--#slides3--> 
  </div>
  <!--/cont-->  
  <div class="cont">
  	<div id="slides4">
    <div class="slides_container">
        <div class="slide">
         <div class="content">
            <h3 class="subt look">Looks LASPlash</h3>
            <div class="look_box">
                <ul class="look_btn">
                    <li><a class="natural" href="#">look natural<span></span></a></li>
                    <li><a class="casual" href="#">look casual<span></span></a></li>
                    <li><a class="noche" href="#">look noche<span></span></a></li>
                    <li><a class="fantasia" href="#">look fantasia<span></span></a></li>                </ul>
                <div class="look_cont">
                    <img alt="look natural">
                    <img alt="look casual">
                    <img alt="look noche">                 
                    <img alt="look fantasia">
                </div>    
            </div>
            <!--/look-->
          </div>
          <!--/content--> 
        </div>
        <!--/slide-->
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
             <img alt="corrector" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="base" width="88" height="121">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content-->  
        </div>
        <!--/slide--> 
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
             <img alt="blush" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="lipgloss" width="88" height="121">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content--> 
        </div>
        <!--/slide-->
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
             <img alt="corrector" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="base" width="88" height="121">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content-->  
        </div>
        <!--/slide-->
      </div>
      <!--/slides_container-->
    </div>
    <!--#slides4--> 
  </div>
  <!--/cont-->
  <div class="cont">
  	<div id="slides5">
    <div class="slides_container">
        <div class="slide">
         <div class="content">
            <h3 class="subt look">Looks LASPlash</h3>
            <div class="look_box">
                <ul class="look_btn">
                    <li><a class="natural" href="#">look natural<span></span></a></li>
                    <li><a class="casual" href="#">look casual<span></span></a></li>
                    <li><a class="noche" href="#">look noche<span></span></a></li>
                    <li><a class="fantasia" href="#">look fantasia<span></span></a></li>                </ul>
                <div class="look_cont">
                    <img alt="look natural">
                    <img alt="look casual">
                    <img alt="look noche">                 
                    <img alt="look fantasia">
                </div>    
            </div>
            <!--/look-->
          </div>
          <!--/content--> 
        </div>
        <!--/slide-->
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
             <img alt="corrector" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="base" width="88" height="121">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content-->  
        </div>
        <!--/slide--> 
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
             <img alt="blush" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="lipgloss" width="88" height="121">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content--> 
        </div>
        <!--/slide-->
        <div class="slide">
          <div class="content">
            <h3 class="subt producto">Productos</h3>
            <div class="producto">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
             <img alt="corrector" width="84" height="82">
            </div>
            <!--/producto-->
            <div class="producto2">
            <img alt="base" width="88" height="121">
            <div class="box_producto">
            <span class="nombre"></span>
            <span class="descripcion"></span>            
            </div>
            <!--/box_producto-->
            </div>
            <!--/producto-->
          </div>
          <!--/content-->  
        </div>
        <!--/slide-->
      </div>
      <!--/slides_container-->
    </div>
    <!--#slides5--> 
  </div>
  <!--/cont-->  
</div>
<script>
		$(document).ready(function(){
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
			var imageSeqLoader = new ProgressiveImageSequence( "images/bg/video-{index}.jpg" , 961 , {
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
			$('body').append('<div id="loading-bar" style="position:fixed; bottom:0; left:0; background-color: #DF0012; background-color: rgba(223,0,18,0.5); height: 1px;"></div>');			
			function handleLoadProgress() {
				var progress = imageSeqLoader.getLoadProgress() * 100;
				$('#loading-bar').css({width:progress+'%',opacity:1});
			}
			function handleLoadComplete() {
				$('#loading-bar').css({width:'100%',opacity:0});
			}
			$win.resize( handleResize );
			$win.scroll( handleScroll );
			handleResize();
			animloop();
		});
</script>
<?php
	wp_footer();
?>
</body>
</html>