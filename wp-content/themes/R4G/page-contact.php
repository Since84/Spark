<?php get_header();

$context = Timber::get_context();
$context['post'] = new TimberPost();
$context['form'] = do_shortcode( '[contact-form-7 id="49" title="Send Us A Message"]' );

Timber::render('views/pages/contact.twig',$context);

get_footer();?>