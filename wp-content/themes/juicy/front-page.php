<?php get_header();

$layouts = [
	'start',
	'how-we-do-it',
	'bakehouse',
	'dna',
	'be-different',
	'why-they-fail',
	'do-it-myself',
	'solution',
	'difference',
	'clients',
	'case-studies',
	'should-you-work',
	'platforms',
	'get-in-touch',
];

foreach ($layouts as $layout) {
	get_template_part('template-parts/layout', $layout);
}

get_footer();
