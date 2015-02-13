<?php
get_header();

$context["page"]= new TimberPost();






Timber::render('/views/pages/page.html.twig', $context);
get_footer();
