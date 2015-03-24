<?php get_header();

$context['post'] = new TimberPost();

Timber::render('views/pages/current_campaign.twig', $context);

get_footer();?>