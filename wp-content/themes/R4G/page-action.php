<?php
	get_header();

	//Get Timber Context. Provides Data to TWIG views
	$context 		= Timber::get_context();
	$post 			= new TimberPost();
	
	///Page Feature
	$featureContext	= Timber::get_context();
	$featureContext['heading'] = get_field( 'feature_heading', get_the_ID());
	$featureContext['text'] = get_field( 'feature_text', get_the_ID());
	$featureContext['link'] = get_field( 'feature_link', get_the_ID()); 
	$featureContext['link_text'] = get_field( 'feature_link_text', get_the_ID()); 
	$featureContext['link_label'] = get_field( 'feature_link_label', get_the_ID()); 
	$featureContext['image'] = get_field( 'feature_image', get_the_ID()); 

	$context['feature'] = Timber::compile('/views/components/action_feature.twig', $featureContext);

 	/// Events
	$eventsContext['spark_class'] = 'featured-news events';
	$eventsContext['header'] = 'Join Rights4Girls at our next event';
	$eventsContextArgs = 	array( 
							'showposts'		=> '3',
							'category_name'	=> 'event',
						);
	$eventsContext['feed'] = Timber::get_posts($eventsContextArgs);
	Theme_Theme::processPosts($eventsContext['feed']);

	$eventSlideContext['spark_class'] = 'featured-news events';
	$eventSlideContext['header'] = 'Join Rights4Girls at our next event';
	$eventSlideContext['slide_template'] = '/views/content/event_slide.html.twig';
	$eventSlideContext['feed'] = $eventsContext['feed'];
 	$context['event_slides'] = Timber::compile('/views/components/static_feed.html.twig', $eventSlideContext);

 	$eventDetailContext['spark_class'] = 'event-detail';
	$eventDetailContext['slide_template'] = '/views/content/event_detail.html.twig';
	$eventDetailContext['feed'] = $eventsContext['feed'];
 	$context['event_details'] = Timber::compile('/views/components/static_feed.html.twig', $eventDetailContext);

	/// Papers & Factsheets
	$fileContext['spark_class'] = 'letters-briefs-petitions';
	$fileContext['header'] = 'Act Now: Letters, Briefs, & Petitions';
	$fileContext['header_caption'] = 'Let Your voice be heard alongside ours in demanding and end to child sex trafficking';
	$fileContext['slide_template'] = '/views/content/file_download.html.twig';
	$fileContext['content'] = $post;

	$fileContext['filters'] = array(
			array(
				'class'	=> 'letter',
				'name'	=> 'Letter'
			),
			array(
				'class'	=> 'brief',
				'name'	=> 'Brief',
			),
			array(
				'class'	=> 'petition',
				'name'	=> 'petition',
			)
		);

 	$context['papers_factsheets'] 	= Timber::compile('/views/content/file_feed.html.twig', $fileContext);
	//Display Page using home template 
	Timber::render('/views/pages/action.html.twig', $context);

	get_footer();
?>