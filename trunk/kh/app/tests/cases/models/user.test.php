<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Helsinki' for 'EEST/3.0/DST' instead in /Applications/XAMPP/xamppfiles/htdocs/kh/cake/console/templates/default/classes/test.ctp on line 22
/* User Test cases generated on: 2011-08-30 23:08:43 : 1314734923*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.group', 'app.post');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
