<?php

namespace Plugin\Todo;

class Controller extends \Controller {

	protected $userId;

	function __construct() {
		$this->_userId = $this->_requireLogin();
	}

	function get($f3) {
		$item = new \Plugin\Todo\Model\Item;
		$f3->set("items", $item->find(array("user_id = ?", $this->_userId)));
		$f3->set("UI", $f3->get("UI") . ";./app/plugin/todo/view/");
		$this->_render("todo.html");
	}

	function post($f3, $params) {
		header("Content-type: application/json");
		$item = new \Plugin\Todo\Model\Item;
		// Handle inserts and updates
	}

}
