<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ZoTheme
 * @subpackage Zo Theme
 * @since 1.0.0
 */


/*
 * Función para imprimir la ruta de la imagen destacada.
 * Ejemplo de utilización: echo atrib_imagen_destacada();
 */
function atrib_imagen_destacada() {
    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_image_src( $thumbID, 'large' ); // Sustituir por thumbnail, medium, large o full
    return $imgDestacada[0]; // 0 = ruta, 1 = altura, 2 = anchura, 3 = boolean
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="prueba ">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Facebook, Twitter metas -->
	<meta property="og:title" content="Ana Georgina Photography">
	<meta property="og:type" content="article" />
	<meta name="og:description" content="Ana Georgina photography: wedding, portrait, architecture, projects, prints." />
	<meta name="og:url" content="<?php echo get_the_permalink(); ?>" />
	<meta property="og:image" content="<?php echo atrib_imagen_destacada(); ?>" alt="photography Ana Georgina">
	<meta property="og:image:width" content="210" />
	<meta property="og:image:height" content="110" />
	<meta property="fb:app_id" content="1347718481909811" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@anageorginaphoto" />
	<meta name="twitter:title" content="Ana Georgina Photography" />
	<meta name="twitter:description" content="Ana Georgina photography: wedding, portrait, architecture, projects, prints." />
	<meta name="twitter:image" content="<?php echo atrib_imagen_destacada(); ?>" alt="photography Ana Georgina">

	<!-- Sitemap Google Verify -->
	<meta name="google-site-verification" content="4Bt7KHVG0kzwetxi_LnrYR8QUCkKFdSNGA4PU2hpaDs" />

<!-- TYPEKIT -->
<script src="https://use.typekit.net/rfc6sqm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="https://use.typekit.net/etu8gxj.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php zo_get_page_loading(); ?>
<?php zo_presets_selector(); ?>

<!-- contact-form -->
<script>
	dataLayer = [{
		'event': ''
	}];
</script>

<div id="page">

	<?php if ( ! in_category(array('portrait','architecture','prints')) ) { ?>

		<header id="masthead" class="site-header [ js-header ]">
			<?php zo_header(); ?>
		</header>

	<?php } ?>

	<div class="[ main-body ]">
	    <?php zo_page_title(); ?>
		<div id="main">