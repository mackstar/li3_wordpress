<?php

namespace li3_wordpress\controllers;

/**
 * Controller class for viewing an index of posts
 * or for viewing a single blog post.
 *
 */
class BlogController extends \lithium\action\Controller {

	/**
	 * Index action for blog posts, this is a paged view for all blog
	 * posts. Main role is for search, all, categoried or dated views
	 *
	 * @param int $page Page Number
	 */
	public function index($page=1) {
		global $paged;
		$paged = $page;
		$conditions = array('posts_per_page' => 7, 'paged' => $page);
		if (isset($this->request->query['s'])) {
			$conditions['s'] = $this->request->query['s'];
		}
		if (isset($this->request->month) && isset($this->request->year)) {
			$conditions['monthnum'] = $this->request->month;
			$conditions['year'] = $this->request->year;
		}
		if (isset($this->request->category)) {
			$conditions['category_name'] = $this->request->category;
			$conditions['posts_per_page'] = -1;
		}
		query_posts($conditions);
	}

	/**
	 * View action for blog posts, views a single page
	 * this is either retrieved by its name or by its id
	 *
	 * @param int/string $page Post id or slugged title
	 * @return array post parameters to be used in the view.
	 */
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