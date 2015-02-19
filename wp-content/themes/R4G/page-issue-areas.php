<?php
	get_header();

	//Get Timber Context. Provides Data to TWIG views
	$context 		= Timber::get_context();
	$post 			= new TimberPost();

	///team
	$teamContext['spark_class'] = 'issue-areas';
	$teamContext['header'] = 'Issue Areas';
	$teamContext['post'] = $post;
	$teamContext['tab_template'] = '/views/content/issue_tab.html.twig';
	$teamContext['content_template'] = '/views/content/issue_tab_content.html.twig';
	$context['issue'] = Timber::compile('/views/components/scrolling_tabs.html.twig', $teamContext);

	/// Learn More: Papers & Factsheets
	$fileContext['spark_class'] = 'papers-factsheets';
	$fileContext['header'] = 'Learn More: Papers & Factsheets';
	$fileContext['header_caption'] = 'Explore these issues and Rights4Girls work surrounding them';
	$fileContext['slide_template'] = '/views/content/file_download.html.twig';
	$fileContext['content'] = $post;

	$fileContext['filters'] = array(
			array(
				'class'	=> 'paper',
				'name'	=> 'Papers'
			),
			array(
				'class'	=> 'factsheet',
				'name'	=> 'Factsheets'
			)
		);
	
	$context['learn_more'] = Timber::compile('/views/content/file_feed.html.twig', $fileContext);

	// /// Coalitons & Partnerships
	// $coalitionContext['spark_class'] = 'coalitions-partnerships';
	// $coalitionContext['header'] = 'Coalitons & Partnerships';
	// $coalitionContext['content'] = $post;
	
	// $context['coalitions_partnerships'] = Timber::compile('/views/content/coalition_block.html.twig', $coalitionContext);


 // 	/// Partners
	// $partnerContext['spark_class'] = 'partners';
	// $partnerContext['header'] = 'Partners';
	// $partnerContext['content'] = $post;
	
	// $context['partners'] = Timber::compile('/views/content/partner_block.html.twig', $partnerContext);


	//Display Page using home template 
	Timber::render('/views/pages/issue_areas.twig', $context);

	get_footer();
?>