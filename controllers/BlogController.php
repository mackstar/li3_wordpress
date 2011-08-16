<?php

namespace li3_wordpress\controllers;

class BlogController extends \lithium\action\Controller {
	
	public function index($page=1) {
		global $paged;
		$paged = $page;
		$conditions = array('posts_per_page' => 7, 'paged' => $page);
		if (isset($this->request->query['s'])) {
			$conditions['s'] = $this->request->query['s'];
		}
		query_posts($conditions);
	}
	
	public function view($page) {
		if (!is_numeric($page)) {
			query_posts(array('name' => $page));
		}
		else {
			query_posts(array('p' => $page));
		}
		the_post();
	}
	
}

?>