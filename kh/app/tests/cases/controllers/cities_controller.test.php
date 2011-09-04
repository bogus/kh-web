<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Helsinki' for 'EEST/3.0/DST' instead in /Applications/XAMPP/xamppfiles/htdocs/kh/cake/console/templates/default/classes/test.ctp on line 22
/* Cities Test cases generated on: 2011-09-01 18:00:19 : 1314889219*/
App::import('Controller', 'Cities');

class TestCitiesController extends CitiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CitiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.city', 'app.county');

	function startTest() {
		$this->Cities =& new TestCitiesController();
		$this->Cities->constructClasses();
	}

	function endTest() {
		unset($this->Cities);
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
