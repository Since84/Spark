<?php 

	$footerContext = Timber::get_context();

	$footerContext['header'] = array(
		'heading' => get_option( 'footer_heading' )
		,'sub_heading' => get_option( 'footer_sub_heading' )
	);

	$twitterContext = array(
		'link' 		=>	get_option('twitter_link')
		,'widget'	=>	Timber::get_widgets('social')
	);
	$footerContext['twitter'] = Timber::compile('views/components/twitter_block.html.twig', $twitterContext);

	$petitionContext['petition'] = array(
		"heading"	=>	get_option('petition_heading')
		,"text"		=>	get_option('petition_text')
		,"link"		=>	get_option('petition_link')
	);

	$footerContext['petition'] = Timber::compile( 'views/content/petition_block.html.twig', $petitionContext );

	/// Contact Area
	$sitemapContext = array( 'nav' => new TimberMenu('contact menu') );
	$footerContext['contact_menu'] = Timber::compile('views/components/nav.html.twig', $sitemapContext);

	$socialContext = array(
							 'twitter' 	=> get_option('twitter_link')
							,'facebook'	=> get_option('facebook_link')
					);
	$footerContext['social_menu'] = Timber::compile('/views/components/social.html.twig', $socialContext);

	Timber::render('views/content/footer.html.twig', $footerContext);

	wp_footer(); 
?>
</body>
</html>