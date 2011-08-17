<?php

namespace li3_wordpress\controllers;

/**
 * Controller class for pages at this stage it is just
 * detail pages
 *
 */
class PagesController extends \lithium\action\Controller {
	
	/**
	 * The page view action, this returns nothing as we leave all that up
	 * to WP for the time being
	 *
	 */
	public function view() {
		query_posts(array('pagename' => $this->request->page));
		the_post();
	}
	
}

?>