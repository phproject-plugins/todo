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

		// Add menu item
		$this->_addNav("todo", "To-do", '/$\\/todo/i');

		// Add routes
		$f3->route("GET /todo", "Plugin\Todo\Controller->get");
		$f3->route("POST /todo/@action", "Plugin\Todo\Controller->post");
	}

	/**
	 * Install plugin (add database tables)
	 */
	public function _install() {
		$f3 = \Base::instance();
		$db = $f3->get("db.instance");
		$install_db = file_get_contents(__DIR__ . "/db/database.sql");
		$db->exec(explode(";", $install_db));
	}

	/**
	 * Check if plugin is installed
	 * @return bool
	 */
	public function _installed() {
		$f3 = \Base::instance();
		$db = $f3->get("db.instance");
		$q = $db->exec("SHOW TABLES LIKE 'todo_item'");
		return !!$db->count();
	}

}
