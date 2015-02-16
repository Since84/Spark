<?php 

get_header();

$context["page"]  = new TimberPost();

$context["womens_rights"] = new TimberPost(2);
// $context["womens_rights"]->content = do_shortcode( $context["womens_rights"]->content );

Timber::render('/views/sections/womens_rights.twig', $context);
Timber::render('/views/sections/about.twig', $context);
Timber::render('/views/sections/women_climate.twig', $context);
Timber::render('/views/sections/common_cause.twig', $context);
Timber::render('/views/sections/climate_leaders.twig', $context);
Timber::render('/views/sections/moving_forward.twig', $context);
Timber::render('/views/sections/report.twig', $context);
Timber::render('/views/sections/footer.twig', $context);

get_footer();