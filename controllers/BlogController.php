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
		if (isset($this->request->category)) {
			$conditions['category_name'] = $this->request->category;
			$conditions['posts_per_page'] = -1;
		}
		query_posts($conditions);
	}
	
	public function view($page) {
		if (!is_numeric($page)) {
			$posts = query_posts(array('name' => $page));
		}
		else {
			$posts = query_posts(array('p' => $page));
		}
		$post = $posts[0];
		the_post();
		return compact('post');
	}
	
}

?>