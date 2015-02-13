<?php
/* Template Name: Course List */
get_header();

$courseContext['feed'] = Timber::get_posts('post_type=course_page');

$courseContext['slide_template'] = '/views/content/course_list_slide.html.twig';

$context = array(
	'feed' => Timber::compile('/views/components/static_feed.html.twig', $courseContext)
	,'page' => new TimberPost()
);

Timber::render('/views/pages/page-course-list.html.twig', $context);
get_footer();