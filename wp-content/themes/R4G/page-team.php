<?php
	get_header();

	//Get Timber Context. Provides Data to TWIG views
	$context 		= Timber::get_context();
	$post 			= new TimberPost();

	///team
	$teamContext['spark_class'] = 'our-team';
	$teamContext['header'] = 'Meet Our Team';

	$teamContext['post'] = $post;
	$teamContext['tab_template'] = '/views/content/team_tab.html.twig';
	$teamContext['content_template'] = '/views/content/team_tab_content.html.twig';
	$teamContext['slide_field'] = 'team_members';
	$context['our_team'] = Timber::compile('/views/components/team_gallery.html.twig', $teamContext);

	/// Board of Directors
	$boardContext['spark_class'] = 'board-of-director';
	$boardContext['header'] = 'Board of Directors';
	$boardContext['content'] = $post;
	
	$context['board_of_directors'] = Timber::compile('/views/content/board_block.html.twig', $boardContext);

	
	/// Coalitons & Partnerships
	$coalitionContext['spark_class'] = 'coalitions-partnerships';
	$coalitionContext['header'] = 'Coalitons & Partnerships';
	$coalitionContext['content'] = $post;
	
	$context['coalitions_partnerships'] = Timber::compile('/views/content/coalition_block.html.twig', $coalitionContext);


 	/// Partners
	$partnerContext['spark_class'] = 'partners';
	$partnerContext['header'] = 'Partners';
	$partnerContext['content'] = $post;
	
	$context['partners'] = Timber::compile('/views/content/partner_block.html.twig', $partnerContext);


	//Display Page using home template 
	Timber::render('/views/pages/team.html.twig', $context);

	get_footer();
?>