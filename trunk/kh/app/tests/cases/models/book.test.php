<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Helsinki' for 'EEST/3.0/DST' instead in /Applications/XAMPP/xamppfiles/htdocs/kh/cake/console/templates/default/classes/test.ctp on line 22
/* Book Test cases generated on: 2011-09-01 17:21:44 : 1314886904*/
App::import('Model', 'Book');

class BookTestCase extends CakeTestCase {
	var $fixtures = array('app.book', 'app.user', 'app.group', 'app.post');

	function startTest() {
		$this->Book =& ClassRegistry::init('Book');
	}

	function endTest() {
		unset($this->Book);
		ClassRegistry::flush();
	}

}
