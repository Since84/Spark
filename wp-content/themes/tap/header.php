<?php
 /* The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php
$context=Timber::get_context();
$context['header_image'] = get_header_image();
$context['hero'] = get_field('home_hero', 'option');
$navContext["spark_class"] = "home-nav"; //This is a key inside the template that adds "main-nav" as a class to the nav element;
$navContext["nav"] = new TimberMenu('main-nav');// "main-nav" here is the slug for the menu we created in the admin, they're different, they just have the same name
$context["nav"]= Timber::compile('/views/components/nav.html.twig', $navContext);

Timber::render('/views/components/header.html.twig', $context);

