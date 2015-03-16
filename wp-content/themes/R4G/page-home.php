<?php
	get_header();

	//Get Timber Context. Provides Data to TWIG views
	$context 		= Timber::get_context();

	// $context['nav'] = new TimberMenu('main-nav');
	// $context['header_image'] = get_header_image();
 // 	$socialContext = array(
	// 						'twitter' 	=> get_option('twitter_link')
	// 						,'facebook'	=> get_option('facebook_link')
	// 						,'donate'	=> esc_url( get_permalink( get_page_by_title( 'Donate' ) ) )
	// 					);
 // 	$context['action'] = Timber::compile('/views/components/social.html.twig', $socialContext);
	// Timber::render('/views/components/header.html.twig', $context);
	
	$socialContext = array(
							 'twitter' 	=> get_option('twitter_link')
							,'facebook'	=> get_option('facebook_link')
					);
	$footerContext['social_menu'] = Timber::compile('/views/components/social.html.twig', $socialContext);




	///Page Feature
	$featureContext	= Timber::get_context();
	$featureContext['heading'] = get_field( 'home_feature_heading', get_the_ID());
	$featureContext['sub_heading'] = get_field( 'home_feature_sub_head', get_the_ID());
	$featureContext['link'] = get_field( 'home_feature_link', get_the_ID()); 
	$featureContext['image'] = get_field( 'home_feature_image', get_the_ID()); 

	$context['feature'] = Timber::compile('/views/components/feature.html.twig', $featureContext);

	/// Mission Statement
	$missionContext['spark_class'] = 'our-mission';
	$missionID = get_page_by_title('Mission');
	$missionID = $missionID->ID;
	$missionContext['text'] = new TimberPost($missionID);
	$missionContext['text'] = $missionContext['text']->mission_statement;
	
	$context['mission'] = Timber::compile('/views/components/text_block.html.twig', $missionContext);
	
	/// Why It Matters
	$issueAreasId = Theme_Theme::get_id_by_slug('issue-areas');
	$mattersContext['issues_permalink'] = get_permalink($issueAreasId);
	$mattersContext['spark_class'] = 'why-it-matters';
	$mattersContext['header'] = get_field( 'heading', $issueAreasId );
	$mattersContext['feed'] = get_field('issue_area', $issueAreasId );
	$mattersContext['slide_template'] = '/views/content/wim_home_slide.html.twig';
 	$context['wim'] = Timber::compile('/views/components/cycle-feed.twig', $mattersContext); 


 	/// Call To Action
 	$callToActionContext['spark_class'] = "call-to-action";
 	$callToActionContext['menu'] = new TimberMenu('call to action');
 	
 	$context['call_to_action'] = Timber::compile('/views/content/call-to-action.html.twig', $callToActionContext);


 	/// Featured News and Updates 
	$newsContext['spark_class'] = 'featured-news';
	$newsContext['header'] = 'Featured News & Updates';
	$newsContextArgs = 	array( 
							'showposts'		=> '3',
							'category_name'	=> 'home-feature'
						);
	$newsContext['feed'] = Timber::get_posts($newsContextArgs);
	Theme_Theme::processPosts($newsContext['feed']);
	
	$newsContext['slide_template'] = '/views/content/featured_news_slide.html.twig';
 	$context['news'] = Timber::compile('/views/components/static_feed.html.twig', $newsContext);
	

	//Display Page using home template 
	Timber::render('/views/pages/home.html.twig', $context);

	get_footer();
?>