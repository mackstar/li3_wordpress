<?php

namespace li3_wordpress\extensions\helper;

use \lithium\util\Inflector;

class Wordpress extends \lithium\template\Helper {
	
	protected static $_elements;
	
	
	public function menu($args = array()) {
	}
	
	public function comments() {}
	
	public function commentForm(){}
	
	public function archives(){}
	
	public function categories(){}
	
	public function searchForm() {
		return get_search_form(false);
	}
	
	
	/**
	 * A helper which 
	 *
	 * @param string
	 * @return string Rendered comments_list element.
	 */
	public function area($area) {
		$content = get_post_custom_values($area, get_the_ID());
		return apply_filters('the_content', $content[0]);
	}
	
	/**
	 * Comments List helper.
	 *
	 * @return string Rendered comments_list element.
	 */
	public function commentsList() {
		$comments = get_comments( array('post_id' => get_the_ID(), 'status' => 'approve'));
		$this->_renderView(__FUNCTION__, compact($comments));
	}
	
	/**
	 * Comment Form helper.
	 *
	 * @return string Rendered comment_form element.
	 */
	public function commentForm() {
		$comments = get_comments( array('post_id' => get_the_ID(), 'status' => 'approve'));
		$this->_renderView(__FUNCTION__, compact('comments'));
	}
	
	/**
	 * Comments helper which renders comments and form for each post.
	 *
	 * @return string Rendered comments element.
	 */
	public function comments() {
		$comments = get_comments( array('post_id' => get_the_ID(), 'status' => 'approve'));
		$this->_renderView(__FUNCTION__, compact($comments));
	}
	
	/**
	 * A protected method that passes function name and arguments to render.
	 *
	 * @param string $function CamelCased function name, inflects to underline element name
	 * @param args $args Array of arguments needing to be passed to element
	 * @return string Rendered view from helper method.
	 */
	protected function _renderView($function, $args = array()){
		$view = $this->_context->view();
		return $view->render(
			array('element'=>Inflector::underscore($function)),
			$args
		);
	}
	
}

?>