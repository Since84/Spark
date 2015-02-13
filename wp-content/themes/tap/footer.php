<?php 
	$context["locations"]=get_field("location", "option");

	Timber::render('/views/components/footer.html.twig', $context);
	wp_footer(); 
?>
</body>
</html> 	