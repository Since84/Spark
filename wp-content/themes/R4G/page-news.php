<?php
	get_header();

	//Get Timber Context. Provides Data to TWIG views
	$context 		= Timber::get_context();
 	/// Featured News and Updates 
	$newsContext['spark_class'] = 	'featured-news';
	$newsContext['pid'] = isset( $_GET['pid'] ) ? $_GET['pid'] : null;


	/// Category List
	$catContext['header'] 		= 	'News & Updates';
	// $catContext['categories']	=	Timber::get_terms('category');
	$context['categories'] 	= 	Timber::compile('/views/components/category_selector.html.twig', $catContext);

	/// Featured Post
	$featureContextArgs 		= 	array( 
									'showposts'		=> '1',
									'category_name'	=> 'news-feature'
								);
	
	/// Featured News and Updates 
	$featureContext['spark_class'] = 	'featured-post';
	$featureContext['feed'] 	= 	Timber::get_posts($featureContextArgs);
	$featureContext['slide_template'] = '/views/components/featured_news_slide.html.twig';
 	$context['feature'] 		= Timber::compile('/views/components/static_feed.html.twig', $featureContext);


 	/// News Feed
	$newsContextArgs 			= 	array( 
									'showposts'			=> '3'
									,'category__not_in'	=> array(9, 3, 5)//TODO: Add News Feature and In the Media ids
								);
	$newsContext['feed'] 		= 	Timber::get_posts($newsContextArgs);
	$newsContext['spark_class']	= 	'news-feed';
	Theme_Theme::processPosts($newsContext['feed']);

	$newsContext['slide_template'] = '/views/content/news_post.html.twig';
 	$context['news'] 		= Timber::compile('/views/components/static_feed.html.twig', $newsContext);


 	/// In the Media Feed
	$mediaContextArgs 			= 	array( 
									'showposts'			=> '3',
									'category_name'		=> 'in-the-media'
								);
	$mediaContext['feed'] 		= 	Timber::get_posts($mediaContextArgs);
	Theme_Theme::processPosts($mediaContext['feed']);	

	$mediaContext['spark_class']	= 'in-the-media';
	$mediaContext['header']			= 'Rights4Girls in the Media';
	$mediaContext['slide_template'] = '/views/content/media_post.html.twig';
 	$context['media'] 			= Timber::compile('/views/components/cycle-feed.twig', $mediaContext);


 	/// Malika Blog
	$malikaContextArgs 			= 	array( 
									'showposts'			=> '1',
									'category_name'		=> 'malikas-blog'
								);
	$malikaContext['spark_class'] 	= 'malikas-blog';
	$malikaContext['header'] 		= "Malika Saada Saar's Huffington Post Blog";
	$malikaContext['feed'] 			= Timber::get_posts($malikaContextArgs);
	Theme_Theme::processPosts($malikaContext['feed']);

	$malikaContext['slide_template'] = '/views/content/malika_slide.html.twig';
 	$context['malika'] = Timber::compile('/views/components/static_feed.html.twig', $malikaContext);
	

	//Display Page using news template 
	Timber::render('/views/pages/news.html.twig', $context);

	get_footer();
?>