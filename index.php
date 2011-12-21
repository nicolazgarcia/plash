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
	wp_enqueue_script('footer', get_bloginfo('template_directory').'/js/footer.js', array('jquery'), '', true);
	wp_head();
	?>
</head>
<body <?php body_class(); ?> data-blogurl="<?php echo get_bloginfo('wpurl');?>">
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
            <div class="paso cinco"> <span class="icono">paso 5</span> Busca <b>LASPlash panama</b> en <b>facebook</b> para ver tu foto </div>
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
      <div class="video">
      <?php if ( is_active_sidebar( 'video-widget-area' ) ) {
		dynamic_sidebar( 'video-widget-area' );
      } ?>
      </div>
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
    <?php query_posts("posts_per_page=1"); ?>
	<?php while (have_posts()) : the_post(); ?>
      <div class="box">
        <div class="globo_mas_votada">la foto <br>
          <b>m&aacute;s votada</b><span class="guia"></span>
        </div>
        <div class="avatar">
        <?php
        	if( has_post_thumbnail() ){
				the_post_thumbnail('leader-thumb');
			}else{
				echo '<img alt="La foto mas votada" src="'.get_bloginfo( 'template_directory' ).'/images/avatar_mas_votada.jpg">';
			}
		?>
        <span class="likes"><?php echo simple_fields_get_post_value($post->ID, "Votos", true); ?><span class="left"></span><span class="right"></span></span>
        </div>
      </div>
      <!--/box-->
      <h3 class="subt total_c">Total de concursantes</h3>
      <?php
      $total = simple_fields_get_post_value($post->ID, "Concursantes", true);
	  $total_spans = '';
	  for ($i=0; $i<strlen($total); $i++) {
	  	$total_spans .= '<span>'.$total[$i].'</span>';
	  }
      ?>
      <div class="total_concursantes"><?php echo $total_spans; ?></div>
      <h3 class="subt ultimas_c">Ultimas concursantes</h3>
      <div class="ultimas_concursantes">
      	<?php
      	$default_pic = get_bloginfo( 'template_directory' ).'/images/avatar_votos.jpg';
		$ultimas = simple_fields_get_post_group_values($post->ID, "Ultimas", true, 2);
		foreach($ultimas as $girl){
			echo '<span class="concursante">';
			echo $girl['Nombre'].'<span class="numero_likes">'.$girl['Likes'].'</span>';
			if ($image_id = $girl['Imagen']){
				$img_attrs = wp_get_attachment_image_src($image_id, 'latest-thumb');
				$img_src = $img_attrs[0];
			}else{
				$img_src = $default_pic;
			}
			echo '<img alt="'.$girl['Nombre'].'" src="'.$img_src.'"></span>';
		}
		?>
      </div>
      <!--/ultimas concursantes-->
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
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
  
  <?php $lookcounter = 1; ?>
  <?php query_posts("post_type=page&posts_per_page=-1&orderby=menu_order&order=ASC&post_parent=0"); ?>
  <?php while (have_posts()) : the_post(); ?>
  <?php $lookcounter++; ?>
  <div class="cont">
  <!--
  ahora no hay galeria la navegacion es por las 4 secciones y los botones de navegacion son los de look_btn
  -->
  	<div id="slides<?php echo $lookcounter; ?>">
    <div class="slides_container">
       <div class="slide">
         <div class="content">
            <h3 class="subt look"><?php the_title(); ?></h3>
            <div class="look_box">
                <ul class="look_btn">
                    <li><a class="natural" href="#slide2">look natural<span></span></a></li>
                    <li><a class="casual" href="#slide3">look casual<span></span></a></li>
                    <li><a class="noche" href="#slide4">look noche<span></span></a></li>
                    <li><a class="fantasia" href="#slide5">look fantasia<span></span></a></li>
				</ul>
                <div class="look_cont">
                    <img alt="look natural">
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
        <?php
        $counter = 0;
		$products = get_posts("post_type=page&posts_per_page=6&orderby=menu_order&order=ASC&post_parent=".$post->ID);
		foreach( $products as $page ):
			if ($counter && ($counter % 2 == 0) ){
				echo '</div></div><div class="slide"><div class="content"><h3 class="subt producto">Productos</h3>';
			}
			
			if( has_post_thumbnail($page->ID) ){
				$prod_img = get_the_post_thumbnail($page->ID, 'product-thumb');
			}else{
				$prod_img = '<img alt="'.$page->post_title.'" />';
			}
		?>
			<div class="producto<? echo ($counter%2)? '2':''; ?>">
			  <?php
              if($counter%2) {
              	echo $prod_img;
			  }
			  ?>
	          <div class="box_producto">
	            <span class="nombre"><?php echo $page->post_title; ?></span>
	            <span class="descripcion"><?php echo $page->post_content; ?></span>            
	          </div>
              <!--/box_producto-->
              <?php
              if( ! ($counter%2)) {
              	echo $prod_img;
			  }
			  ?>
            </div>
            <!--/producto-->
        <?php
			$counter++;
        endforeach;
        ?>
        
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
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
</div>
<?php
	wp_footer();
?>
</body>
</html>