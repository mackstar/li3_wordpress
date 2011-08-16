<?php

namespace li3_wordpress\controllers;

class BlogController extends \lithium\action\Controller {
	
	public function index($page=1) {
		global $paged;
		$paged = $page;
		query_posts(array('posts_per_page' => 7, 'paged' => $page));
	}
	
	public function view($page) {
		if (!is_numeric($page)) {
			query_posts('pagename=' . $page);
		}
		else {
			query_posts('p=' . $page);
		}
		the_post();
	}
	
}

?>