<?php

namespace li3_wordpress\extensions\helper;

class Wordpress extends \lithium\template\Helper {
	
	protected static $_elements;
	
	public function posts() {
	  $posts = get_posts('numberposts=5&offset=0');
	  $output = '';
		foreach($posts as $post) {
			$output .= '<li><a href="' . get_permalink($post->ID) . '" title="'. $post->post_title .'" >';
			$output .= $post->post_title .'</a> </li> ';
		}
		return $output;
	}
	
	public function menu($args = array()) {
	}
	
	public function comments() {}
	
	public function writeComment(){}
	
	public function archives(){}
	
	public function categories(){}
	
	public function searchForm() {
		return get_search_form(false);
	}
	
	public function area($area) {
		$content = get_post_custom_values($area, get_the_ID());
		return apply_filters('the_content', $content[0]);
	}
	
}

?>