<?php
get_header();

$context["page"]= new TimberPost();

Timber::render('/views/pages/course.html.twig', $context);
get_footer();