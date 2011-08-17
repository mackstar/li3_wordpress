<?php

namespace li3_wordpress\extensions\data;

use lithium\core\ConfigException;

/**
 * Mainly a placeholder for configuration
 *
 */
class Wordpress extends \lithium\core\StaticObject {
	
	/*
	 * Path to wordpress install
	 */
	protected static $_path = null;
	
	public static function config($config = array()) {
		switch(true) {
			case (is_array($config)):
				foreach ($config as $key => $val) {
					$key = '_'.$key;
					static::${$key} = $val;
				}
				break;
			default:
				$key = '_'.$config;
				return static::${$key};
		}
	}
}

?>