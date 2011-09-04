<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Helsinki' for 'EEST/3.0/DST' instead in /Applications/XAMPP/xamppfiles/htdocs/kh/cake/console/templates/default/classes/test.ctp on line 22
/* Books Test cases generated on: 2011-09-01 17:21:45 : 1314886905*/
App::import('Controller', 'Books');

class TestBooksController extends BooksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BooksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.book', 'app.user', 'app.group', 'app.post');

	function startTest() {
		$this->Books =& new TestBooksController();
		$this->Books->constructClasses();
	}

	function endTest() {
		unset($this->Books);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
