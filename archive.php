<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Comparte Tu Look - LASplash Cosmetics</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/vote.css" />
	<link href='http://fonts.googleapis.com/css?family=Abel|Quicksand:400,700|Wire+One|Anton' rel='stylesheet' type='text/css'>
	<?php
	wp_enqueue_script('jquery.cycle.lite', get_bloginfo('template_directory').'/js/jquery.cycle.lite.js', array('jquery'));
	wp_enqueue_script('votelightbox', get_bloginfo('template_directory').'/js/votelightbox.js', array('jquery'));
	wp_head();
	?>
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
	(function($)
	{
		$(function(){
			$('#bg').cycle({
				fx: 'fade',
				timeout: 900
			});
		});
	})(jQuery);
	</script>
</head>
<body <?php body_class(); ?>>
	<div id="bg">
		<img src="<?php bloginfo('template_directory');?>/images/fondo1.jpg" /><img src="<?php bloginfo('template_directory');?>/images/fondo2.jpg" /><img src="<?php bloginfo('template_directory');?>/images/fondo3.jpg" />
	</div>
	<div id="header">
		<h1><span style="color:#ec297b;">VOTA POR</span> TU <span style="color:#00a79d;">LOOK FAVORITO</span></h1>
	</div>

<?php if (function_exists('vote_poll') && !in_pollarchive()): ?>
	<?php get_poll();?>
<?php endif; ?>

	<blockquote>
		<p>Vota por el look que más te gusta, las fotos más votadas serán finalistas y podrán ganar un Paseo en VIP Bus con open bar incluido y boquitas para ti y tus 25 mejores amigos. Ademas de $50 en productos LASplash Cosmetics.</p>
	</blockquote>	
	<div id="participa">
		<a href="https://www.facebook.com/LASplashPanama?sk=app_343971698958398"><img src="<?php bloginfo('template_directory');?>/images/participa.png" /></a>
	</div>
	<div id="footer">
		<a href="http://twitter.com/lasplashpanama"><img src="<?php bloginfo('template_directory');?>/images/las_twitter.png" /></a>
		<a href="https://www.facebook.com/LASplashPanama"><img src="<?php bloginfo('template_directory');?>/images/las_facebook.png" /></a>
	</div>

	<div id="lightbox">
		<div id="close-box">X</div>
		<div id="big-pic">
			<img src="<?php bloginfo('template_directory');?>/images/loader.gif" />
			<br />
			<input type="button" value="votar" name="vote">
		</div>
	</div>
	<?php wp_footer();?>
</body>
</html>