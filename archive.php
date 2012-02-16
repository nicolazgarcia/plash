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
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
	<div id="header">
		<h1><span style="color:#ec297b;">VOTA POR</span> TU <span style="color:#00a79d;">LOOK FAVORITO</span></h1>
	</div>

<?php if (function_exists('vote_poll') && !in_pollarchive()): ?>
	<?php get_poll();?>
<?php endif; ?>

	<blockquote>
		<p>Vota por el look que más te gusta, las fotos más votadas serán finalistas y podrán ganar un Paseo en VIP Bus con open bar incluido y boquitas para ti y tus 25 mejores amigos. Ademas de $50 en productos LASplash Cosmetics.</p>
	</blockquote>
	<div id="footer">
		<div id="participa">
			<a href="https://www.facebook.com/LASplashPanama?sk=app_343971698958398">Participa Ya!</a>
		</div>
		<a href="https://www.facebook.com/LASplashPanama">Facebook</a>
		<a href="http://twitter.com/lasplashpanama">Twitter</a>
	</div>

	<?php wp_footer();?>
</body>
</html>