<?php

namespace li3_wordpress\controllers;

class PagesController extends \lithium\action\Controller {
	
	public function view() {
		query_posts('pagename=' . $this->request->page);
		the_post();
	}
	
}

?>