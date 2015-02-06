<?php
/**
 * A simple to-do list
 * @package  Todo
 * @author   Alan Hardman <alan@phpizza.com>
 * @version  0.1.0
 */

namespace Plugin\Todo;

class Base extends \Plugin {

	/**
	 * Initialize the plugin
	 */
	public function _load() {
		$f3 = \Base::instance();
		$f3->route("GET /todo", function($f3) {

		});
		$f3->route("POST /todo", function($f3) {

		});
	}

	/**
	 * Check if plugin is installed
	 * @return bool
	 */
	public function _installed() {
		return true;
	}

}
