<?php

	$project_id = 2; // same for all languages
	$project_lang =  'en';

	$project_name = $projects[$project_id][$project_lang]['title']; // case sensitive for <title> and <h1> tag
	$project_dir = 'projects/'.$projects[$project_id][$project_lang]['slug'].'/';

	$project_subdomain = get_subdomain($projects[$project_id][$project_lang]['slug']);

	$project_desc_title = 'Get your User Agent string like a charm'; // goes into a <h2> element
	$project_desc = 'The what is my User Agent service displays your User Agent by just visiting this page. One common use of the term refers to a web browser telling a website information about the browser and operating system.'; // goes into a <p> element, no html

	$project_referrals = [1,3];

	// keywords for this project
	$project_keywords = array('internet', 'address', 'system', 'browser', 'compatibility', array(
		'key' => 'user-agent',
		'url' => 'https://en.wikipedia.org/wiki/User_agent'
	));

	// scripts for this project, the order matters
	$project_scripts = array(
		// 'js/vendors/jquery.min.js',			// jquery root dir
		// 'js/magic.min.js', 							// javascript project dir
	);

?>
