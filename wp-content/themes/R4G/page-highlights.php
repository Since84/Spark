<?php
	get_header();

	//Get Timber Context. Provides Data to TWIG views
	$context 		= Timber::get_context();
	
	$galleryContext['header'] = 'Highlight Snapshots';
	$galleryContext['feed'] = get_field('highlight_gallery');
	$galleryContext['spark_class'] = "highlight-gallery";
	$galleryContext['slide_template'] = '/views/content/news_slide.html.twig';
	$context['gallery'] 				= Timber::compile('/views/components/thumbnail_carousel_gallery.html.twig', $galleryContext);

 	/// Accomplishments
	$accomplishmentsContext['feed'] 			= 	get_field('accomplishments');
 	// var_dump($accomplishmentsContext['feed']);
	$accomplishmentsContext['spark_class'] 		= 'accomplishments';
	$accomplishmentsContext['header'] 			= 'Accomplishments';
	$accomplishmentsContext['slide_template'] 	= '/views/content/accomplishment_slide.html.twig';
	$context['accomplishments']					= Timber::compile('/views/components/static_feed.html.twig', $accomplishmentsContext );

	//Display Page using home template 
	Timber::render('/views/pages/highlights.html.twig', $context);

	get_footer();
?>