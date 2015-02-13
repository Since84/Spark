<?php
get_header();

$context['mission'] = new TimberPost(60);
$context['spark_class'] = 'mission-statement';
$context['text'] = $context['mission']->summary;

Timber::render('/views/components/text_block.html.twig', $context);

get_footer();