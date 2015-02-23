<?php
	get_header();

	//Get Timber Context. Provides Data to TWIG views
	$context 			= Timber::get_context();
	$context['post'] 	= new TimberPost();

	//Display Page using home template 
	Timber::render('/views/pages/mission.twig', $context);

	get_footer();
?>