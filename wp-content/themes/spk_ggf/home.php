<?php 
get_header();
$context = Timber::get_context();
$context["page"]  = new TimberPost();

$context["womens_rights"] = new TimberPost(2);
$context["about"] = new TimberPost(6);
$context["women_climate"] = new TimberPost(8);
$context["common_cause"] = new TimberPost(10);
$context["climate_leaders"] = new TimberPost(12);
$context["moving_forward"] = new TimberPost(14);
$context["report"] = new TimberPost(16);
$context["footer"] = new TimberPost(18);
$context["contact_form"] = new TimberPost(54);
$context["nav"] = new TimberMenu('Main Nav');


Timber::render('/views/sections/womens_rights.twig', $context);
Timber::render('/views/sections/contact_form.twig', $context);
Timber::render('/views/sections/about.twig', $context);
Timber::render('/views/sections/women_climate.twig', $context);
Timber::render('/views/sections/common_cause.twig', $context);
Timber::render('/views/sections/climate_leaders.twig', $context);
Timber::render('/views/sections/case_study_frame.twig', $context);
Timber::render('/views/sections/moving_forward.twig', $context);
Timber::render('/views/sections/report.twig', $context);
Timber::render('/views/sections/footer.twig', $context);
Timber::render('/views/sections/resources.twig', $context);
Timber::render('/views/sections/nav.twig', $context);

get_footer();