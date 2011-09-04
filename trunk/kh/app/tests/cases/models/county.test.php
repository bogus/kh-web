<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Helsinki' for 'EEST/3.0/DST' instead in /Applications/XAMPP/xamppfiles/htdocs/kh/cake/console/templates/default/classes/test.ctp on line 22
/* County Test cases generated on: 2011-09-01 18:00:24 : 1314889224*/
App::import('Model', 'County');

class CountyTestCase extends CakeTestCase {
	var $fixtures = array('app.county', 'app.city');

	function startTest() {
		$this->County =& ClassRegistry::init('County');
	}

	function endTest() {
		unset($this->County);
		ClassRegistry::flush();
	}

}
