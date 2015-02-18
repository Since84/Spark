<?php
	get_header();

	//Get Timber Context. Provides Data to TWIG views
	$context 		= Timber::get_context();
	$post 			= new TimberPost();

	///team
	// $teamContext['spark_class'] = 'our-team';
	// $teamContext['header'] = 'Meet Our Team';
	// $teamContext['post'] = $post;
	// $teamContext['tab_template'] = '/views/content/team_tab.html.twig';
	// $teamContext['content_template'] = '/views/content/team_tab_content.html.twig';
	// $context['our_team'] = Timber::compile('/views/components/scrolling_tabs.html.twig', $teamContext);

	/// Board of Directors
	// $boardContext['spark_class'] = 'board-of-director';
	// $boardContext['header'] = 'Board of Directors';
	// $boardContext['content'] = $post;
	
	// $context['board_of_directors'] = Timber::compile('/views/content/board_block.html.twig', $boardContext);

	
	/// Why It Matters
	$mattersContext['spark_class'] = 'why-it-matters';
	$mattersContext['header'] = get_post_meta( get_the_ID(), 'wim_header', true );
	$mattersContext['feed'] = get_field('wim_content');
	$mattersContext['slide_template'] = '/views/content/wim_slide.html.twig';
 	
 	$context['wim'] = Timber::compile('/views/components/gallery.html.twig', $mattersContext); 


 	/// Call To Action
 	$callToActionContext['spark_class'] = "call-to-action";
 	$callToActionContext['menu'] = new TimberMenu('call to action');
 	
 	$context['call_to_action'] = Timber::compile('/views/content/call-to-action.html.twig', $callToActionContext);


 	/// Featured News and Updates 
	$newsContext['spark_class'] = 'featured-news';
	$newsContext['header'] = 'Featured News & Updates';
	$newsContextArgs = 	array( 
							'showposts'		=> '3',
							'category_name'	=> 'featured'
						);
	$newsContext['feed'] = Timber::get_posts($newsContextArgs);
	Theme_Theme::processPosts($newsContext['feed']);

	$newsContext['slide_template'] = '/views/content/featured_news_slide.html.twig';
 	$context['news'] = Timber::compile('/views/components/static_feed.html.twig', $newsContext);
	

	//Display Page using home template 
	Timber::render('/views/pages/team.html.twig', $context);

	get_footer();
?>