<?php
/* County Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Helsinki' for 'EEST/3.0/DST' instead in /Applications/XAMPP/xamppfiles/htdocs/kh/cake/console/templates/default/classes/fixture.ctp on line 24
2011-09-01 18:00:24 : 1314889224 */
class CountyFixture extends CakeTestFixture {
	var $name = 'County';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'city_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'county_code' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'county_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin5_turkish_ci', 'charset' => 'latin5'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin5', 'collate' => 'latin5_turkish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'city_id' => 1,
			'county_code' => 1,
			'county_name' => 'Lorem ipsum dolor sit amet'
		),
	);
}
