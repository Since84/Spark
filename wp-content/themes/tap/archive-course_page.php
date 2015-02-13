<?php
/* Page Template: Course List */
get_header();

$courseContext['feed'] = Timber::get_posts(array(
		'post_type' => 'course_page'
	));

$context['courses'] = Timber::compile('/views/components/static_feed.html.twig');

Timber::render('/views/pages/page-course-list.html.twig', $context['courses']);
get_footer();